

      $(document).ready(function(){
        $('#user_dialog').dialog({
          autoOpen:false,
          width:400
        });
        $('#submit').click(function(){
          var error_product = '';
          var error_expense = '';
          var error_price = '';
          var error_qauntity = '';
          var error_description = '';
          var error_store_id = '';
          var product = '';
          var expense = '';
          var price = '';
          var qauntity = '';
          var description = '';
          var store_id = '';

          if($('#product').val() == '')
          {
            error_product = 'the store is required';
            $('#error_product').text(error_product);
            $('#product').css('border-color', '#cc0000');
            product = '';
          }
          else
          {
            error_product_id = '';
            $('#error_product').text(error_product);
            $('#product').css('border-color', '');
            product = $('#product').val();
          }

          if($('#expense').val() == '')
          {
            error_expense = 'the expense is required';
            $('#error_expense').text(error_expense);
            $('#expense').css('border-color', '#cc0000');
            expense = '';
          }
          else
          {
            error_expense = '';
            $('#error_expense').text(error_expense);
            $('#expense').css('border-color', '');
            expense = $('#expense').val();
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
          if($('#description').val() == '')
          {
            error_description = 'the store is required';
            $('#error_description').text(error_description);
            $('#description').css('border-color', '#cc0000');
            description = '';
          }
          else
          {
            error_description = '';
            $('#error_description').text(error_description);
            $('#description').css('border-color', '');
            description = $('#description').val();
          }
          if($('#store_id').val() == '')
          {
            error_store_id = 'the store is required';
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



          if(error_product != '' || error_expense != '' || error_price != '' || error_qauntity != '' || error_store_id != ''  || error_description != '' )

          {
            return false;
          }else{

              $('.inner').append(`
                      <tr>
                         <td class="product-column"> <input name="product[]" class="form-control" type="text" value="` + $('#product').val() + `"  readonly > </td>
                         <td class="expense-column"> <input name="expense[]" class="form-control" type="text" value="` + $('#expense').val() + `"  readonly > </td>
                         <td class="description-column"> <input name="description[]" class="form-control" type="text" value="` + $('#description').val() + `"  readonly > </td>
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
