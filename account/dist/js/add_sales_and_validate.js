

      $(document).ready(function(){
        $('#user_dialog').dialog({
          autoOpen:false,
          width:400
        });
        $('#submit').click(function(){
          var error_products_barcode = '';
          var error_product_id = '';
          var error_price = '';
          var error_qauntity = '';
          var error_store_id = '';
        /*  var error_statement = '';*/
          var products_barcode = '';
          var product_id = '';
          var price = '';
          var qauntity = '';
          var store_id = '';
        /*  var statement = '';*/
          if($('#products_barcode').val() == '' )
          {
            error_products_barcode = 'products barcode is required';
            $('#error_products_barcode').text(error_products_barcode);
            $('#products_barcode').css('border-color', '#cc0000');
            products_barcode = '';
          }
          else
          {
            error_products_barcode = '';
            $('#error_products_barcode').text(error_products_barcode);
            $('#products_barcode').css('border-color', '');
            products_barcode = $('#products_barcode').val();
          }
          if($('#product_id').val() == '')
          {
            error_product_id = 'the product id is required';
            $('#error_product_id').text(error_product_id);
            $('#product_id').css('border-color', '#cc0000');
            product_id = '';
          }
          else
          {
            error_product_id = '';
            $('#error_product_id').text(error_product_id);
            $('#product_id').css('border-color', '');
            product_id = $('#product_id').val();
          }
          if($('#price').val() == '')
          {
            error_price = 'the price is required';
            $('#error_price').text(error_price);
            $('#price').css('border-color', '#cc0000');
            price = '';
          }
          else
          {
            error_price = '';
            $('#error_price').text(error_price);
            $('#price').css('border-color', '');
            type = $('#price').val();
          }
          if($('#qauntity').val() == '')
          {
            error_qauntity = 'the qauntity is required';
            $('#error_qauntity').text(error_qauntity);
            $('#nature_qauntity').css('border-color', '#cc0000');
            qauntity = '';
          }
          else
          {
            error_qauntity = '';
            $('#error_qauntity').text(error_qauntity);
            $('#qauntity').css('border-color', '');
            qauntity = $('#qauntity').val();
          }
          if($('#store_id').val() == '')
          {
            error_store_id = 'the store_id is required';
            $('#error_store_id').text(error_store_id);
            $('#store_id').css('border-color', '#cc0000');
            store_id = '';
          }
          else
          {
            error_store_id = '';
            $('#error_store_id').text(error_store_id);
            $('#store_id').css('border-color', '');
            store_id = $('#store_id').val();
          }

          /*if($('#statement').val() == '')
          {
            error_statement = 'the statement is required';
            $('#error_statement').text(error_statement);
            $('#statement').css('border-color', '#cc0000');
            statement = '';
          }
          else
          {
            error_statement = '';
            $('#error_statement').text(error_statement);
            $('#statement').css('border-color', '');
            statement = $('#statement').val();
          }*/

          if(error_products_barcode != '' || error_product_id != '' || error_price != '' || error_qauntity != '' || error_store_id != '' /* || error_statement != ''*/)

          {
            return false;
          }else{

              $('.inner').append(`
                      <tr>
                         <td class="products_barcode-column"> <input name="products_barcode[]" class="form-control" type="text" value="` + $('#products_barcode').val() + `"  readonly > </td>
                         <td class="product_id-column"> <input name="product_id[]" class="form-control" type="text" value="` + $('#product_id').val() + `"  readonly > </td>
                         <td class="price-column"> <input name="price[]" class="form-control" type="number" value="` + $('#price').val() + `"  readonly > </td>
                         <td class="qauntity-column"> <input name="qauntity[]" class="form-control" type="number" value="` + $('#qauntity').val() + `"  readonly > </td>
                         <td class="store_id-column"> <input name="store_id[]" class="form-control" type="text" value="` + $('#store_id').val() + `"  readonly > </td>
                         <td> <a href="#" class="btn btn-danger remove-column">Remove</a> </td>
                      </tr>
                     `);
                     calculateSalary();
            }
        });

      });




        $(document).on('click','.remove-column', function (e){
             e.preventDefault();
             $(this).parent().parent().remove();
             calculateSalary();
        });
