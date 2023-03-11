

      $(document).ready(function(){
        $('#user_dialog').dialog({
          autoOpen:false,
          width:400
        });
        $('#submit').click(function(){
          var error_name = '';
          var error_type = '';
          var error_nature_account = '';
          var error_account_rank = '';
          var error_first_period = '';
          var error_statement = '';
          var error_date = '';
          var name = '';
          var type = '';
          var nature_account = '';
          var account_rank = '';
          var statement = '';
          var date = '';
          var first_period = '';
          if($('#name').val() == '')
          {
            error_name = 'the name is required';
            $('#error_name').text(error_name);
            $('#name').css('border-color', '#cc0000');
            name = '';
          }
          else
          {
            error_name = '';
            $('#error_name').text(error_name);
            $('#name').css('border-color', '');
            name = $('#name').val();
          }
          if($('#type').val() == '')
          {
            error_type = 'the type is required';
            $('#error_type').text(error_type);
            $('#type').css('border-color', '#cc0000');
            type = '';
          }
          else
          {
            error_type = '';
            $('#error_type').text(error_type);
            $('#type').css('border-color', '');
            type = $('#type').val();
          }
          if($('#nature_account').val() == '')
          {
            error_nature_account = 'the nature account is required';
            $('#error_nature_account').text(error_nature_account);
            $('#nature_account').css('border-color', '#cc0000');
            nature_account = '';
          }
          else
          {
            error_nature_account = '';
            $('#error_nature_account').text(error_nature_account);
            $('#nature_account').css('border-color', '');
            nature_account = $('#nature_account').val();
          }
          if($('#account_rank').val() == '')
          {
            error_account_rank = 'the account rank is required';
            $('#error_account_rank').text(error_account_rank);
            $('#account_rank').css('border-color', '#cc0000');
            account_rank = '';
          }
          else
          {
            error_account_rank = '';
            $('#error_account_rank').text(error_account_rank);
            $('#account_rank').css('border-color', '');
            account_rank = $('#account_rank').val();
          }

          if($('#statement').val() == '')
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
          }
          if($('#date').val() == '')
          {
            error_date = 'the date is required';
            $('#error_date').text(error_date);
            $('#date').css('border-color', '#cc0000');
            date = '';
          }
          else
          {
            error_date = '';
            $('#error_date').text(error_date);
            $('#date').css('border-color', '');
            date = $('#date').val();
          }
          if($('#first_period').val() == '')
          {
            error_first_period = 'the first period is required';
            $('#error_first_period').text(error_first_period);
            $('#first_period').css('border-color', '#cc0000');
            first_period = '';
          }
          else
          {
            error_first_period = '';
            $('#error_first_period').text(error_first_period);
            $('#first_period').css('border-color', '');
            first_period = $('#first_period').val();
          }

          if(error_name != '' || error_type != '' || error_nature_account != '' || error_account_rank != '' || error_statement != '' || error_date != '' || error_first_period != '')

          {
            return false;
          }else{

              $('.inner').append(`
                      <tr>
                         <td class="name-column"> <input name="name[]" class="form-control" type="text" value="` + $('#name').val() + `"  readonly > </td>
                         <td class="nature_account-column"> <input  name="nature_account[]" class="form-control" type="text" value="` + $('#nature_account').val() + `"  readonly > </td>
                         <td class="account_rank-column"> <input name="account_rank[]" class="form-control" type="text" value="` + $('#account_rank').val() + `"  readonly > </td>
                         <td class="statement-column"> <input name="statement[]" class="form-control" type="text" value="` + $('#statement').val() + `"  readonly > </td>
                         <td class="date-column"> <input name="date[]" class="form-control" type="text" value="` + $('#date').val() + `"  readonly > </td>
                         <td class="first_period-column"> <input name="first_period[]" class="form-control"  value="` + $('#first_period').val() + `"  readonly > </td>
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
