



/**
 * Projet Name : Dynamic Form Processing with PHP
 * URL: http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2013, Tech Stream
 * http://techstream.org
 */




/**
 * Projet Name : Dynamic Form Processing with PHP
 * URL: http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2013, Tech Stream
 * http://techstream.org
 */

 $(document).ready(function(){

	 var count = 0;

	 $('#user_dialog').dialog({
		 autoOpen:false,
		 width:400
	 });

	 $('#add').click(function(){
		 $('#user_dialog').dialog('option', 'title', 'Add Data');
		 $('#account_num').val('');
		 $('#name').val('');
		 $('#type').val('');
		 $('#nature_account').val('');
		 $('#account_rank').val('');
		 $('#first_period').val('');
		 $('#statement').val('');
		 $('#date').val('');
		 $('#totalPrice').val('');
		 $('#error_account_num').text('');
		 $('#error_name').text('');
		 $('#error_type').text('');
		 $('#error_nature_account').text('');
		 $('#error_account_rank').text('');
		 $('#error_first_period').text('');
		 $('#error_statement').text('');
		 $('#error_date').text('');
		 $('#error_totalPrice').text('');
		 $('#account_num').css('border-color', '');
		 $('#name').css('border-color', '');
		 $('#type').css('border-color', '');
		 $('#nature_account').css('border-color', '');
	 	 $('#account_rank').css('border-color', '');
		 $('#first_period').css('border-color', '');
	 	 $('#statement').css('border-color', '');
		 $('#date').css('border-color', '');
		 $('#totalPrice').css('border-color', '');
		 $('#save').text('Save');
		 $('#user_dialog').dialog('open');
	 });

	 $('#save').click(function(){
		 var error_account_num = '';
		 var error_name = '';
		 var error_type = '';
		 var error_nature_account = '';
		 var error_account_rank = '';
		 var error_first_period = '';
		 var error_statement = '';
		 var error_date = '';
		 var account_num = '';
		 var name = '';
		 var type = '';
		 var nature_account = '';
		 var account_rank = '';
		 var first_period = '';
		 var statement = '';
		 var date = '';
		 var totalPrice = '';

		 if($('#account_num').val() == '')
		 {
			 error_first_name = 'account number is required';
			 $('#error_account_num').text(error_account_num);
			 $('#account_num').css('border-color', '#cc0000');
			 account_num = '';
		 }
		 else
		 {
			 error_first_name = '';
			 $('#error_account_num').text(error_account_num);
			 $('#account_num').css('border-color', '');
			 account_num = $('#account_num').val();
		 }
		 if($('#name').val() == '')
		 {
			 error_name  = 'name is required';
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
			 error_type = 'type is required';
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
			 error_nature_account = 'nature account is required';
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
			 error_account_rank = 'account rank is required';
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
		 if($('#first_period').val() == '')
		{
			error_first_period = 'first period is required';
			$('#error_first period').text(error_account_rank);
			$('#first_period').css('border-color', '#cc0000');
			account_rank = '';
		}
		else
		{
			error_first_period = '';
			$('#error_first_period').text(error_account_rank);
			$('#first_period').css('border-color', '');
			first_period = $('#first_period').val();
		}

		 if($('#statement').val() == '')
		 {
			 error_hamada = 'statement is required';
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
			 error_date = 'date is required';
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
		 if($('#date').val() == '')
		 {
			 error_totalPrice = 'date is required';
			 $('#error_totalPrice').text(error_totalPrice);
			 $('#totalPrice').css('border-color', '#cc0000');
			 date = '';
		 }
		 else
		 {
			 error_totalPrice = '';
			 $('#error_totalPrice').text(error_totalPrice);
			 $('#totalPrice').css('border-color', '');
			 date = $('#totalPrice').val();
		 }

		 if(error_account_num != '' || error_name != '' || error_type != '' || error_nature_account != '' || error_account_rank != ''|| error_first_period != '' || error_statement != ''|| error_date != '')
		 {
			 return false;
		 }
		 else
		 {
			 if($('#save').text() == 'Save')
			 {
				 count = count + 1;
				 output = '<tr id="row_'+count+'">';
				 output += '<td>'+account_num+' <input type="hidden" name="hidden_account_num[]" id="account_num'+count+'" class="first_name" value="'+account_num+'" /></td>';
				 output += '<td>'+name+' <input type="hidden" name="hidden_name[]" id="name'+count+'" value="'+name+'" /></td>';
				 output += '<td>'+type+' <input type="hidden" name="hidden_type[]" id="type'+count+'" value="'+type+'" /></td>';
				 output += '<td>'+nature_account+' <input type="hidden" name="hidden_nature_account[]" id="nature_account'+count+'" value="'+nature_account+'" /></td>';
				 output += '<td>'+account_rank+' <input type="hidden" name="hidden_account_rank[]" id="account_rank'+count+'" value="'+account_rank+'" /></td>';
				 output += '<td>'+first_period+' <input type="hidden" name="hidden_first_period[]" id="first_period'+count+'" value="'+first_period+'" /></td>';
				 output += '<td>'+statement+' <input type="hidden" name="hidden_statement[]" id="statement'+count+'" value="'+statement+'" /></td>';
				 output += '<td>'+date+' <input type="hidden" name="hidden_date[]" id="date'+count+'" value="'+date+'" /></td>';
				 output += '<td>'+totalPrice+' <input type="hidden" name="hidden_totalPrice[]" id="totalPrice'+count+'" value="'+totalPrice+'"  disabled /></td>';
				 output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				 output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				 output += '</tr>';
				 $('#user_data').append(output);
			 }
			 else
			 {
				 var row_id = $('#hidden_row_id').val();
				 output = '<td>'+account_num+' <input type="hidden" name="hidden_account_num[]" id="account_num'+row_id+'" class="first_name" value="'+account_num+'" /></td>';
				 output += '<td>'+name+' <input type="hidden" name="hidden_name[]" id="name'+row_id+'" value="'+name+'" /></td>';
				 output += '<td>'+type+' <input type="hidden" name="hidden_type[]" id="type'+row_id+'" value="'+type+'" /></td>';
				 output += '<td>'+nature_account+' <input type="hidden" name="hidden_nature_account[]" id="nature_account'+row_id+'" value="'+nature_account+'" /></td>';
				 output += '<td>'+account_rank+' <input type="hidden" name="hidden_account_rank[]" id="account_rank'+row_id+'" value="'+account_rank+'" /></td>';
				 output += '<td>'+first_period+' <input type="hidden" name="hidden_first_period[]" id="first_period'+row_id+'" value="'+first_period+'" /></td>';
				 output += '<td>'+statement+' <input type="hidden" name="hidden_statement[]" id="statement'+row_id+'" value="'+statement+'" /></td>';
				 output += '<td>'+date+' <input type="hidden" name="hidden_date[]" id="date'+row_id+'" value="'+date+'" /></td>';
				 output += '<td>'+totalPrice+' <input type="hidden" name="hidden_totalPrice[]" id="totalPrice'+row_id+'"  disabled /></td>';
				 output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				 output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				 $('#row_'+row_id+'').html(output);
			 }

			 $('#user_dialog').dialog('close');
		 }
	 });

	 $(document).on('click', '.view_details', function(){
		 var row_id = $(this).attr("id");
		 var account_num = $('#account_num'+row_id+'').val();
		 var name = $('#name'+row_id+'').val();
		 var type = $('#type'+row_id+'').val();
		 var nature_account = $('#nature_account'+row_id+'').val();
		 var account_rank = $('#account_rank'+row_id+'').val();
		 var first_period = $('#first_period'+row_id+'').val();
		 var statement = $('#statement'+row_id+'').val();
		 var date = $('#date'+row_id+'').val();
		 var totalPrice = $('#totalPrice'+row_id+'').val();
		 $('#account_num').val(account_num);
		 $('#name').val(name);
		 $('#type').val(type);
		 $('#nature_account').val(nature_account);
		 $('#account_rank').val(account_rank);
		 $('#first_period').val(first_period);
		 $('#statement').val(statement);
		 $('#date').val(date);
		 $('#totalPrice').val(totalPrice);
		 $('#save').text('Edit');
		 $('#hidden_row_id').val(row_id);
		 $('#user_dialog').dialog('option', 'title', 'Edit Data');
		 $('#user_dialog').dialog('open');
	 });

	 $(document).on('click', '.remove_details', function(){
		 var row_id = $(this).attr("id");
		 if(confirm("Are you sure you want to remove this row data?"))
		 {
			 $('#row_'+row_id+'').remove();
		 }
		 else
		 {
			 return false;
		 }
	 });

	 $('#action_alert').dialog({
		 autoOpen:false
	 });

	 $('#user_form').on('submit', function(event){
		 event.preventDefault();
		 var count_data = 0;
		 $('.first_name').each(function(){
			 count_data = count_data + 1;
		 });
		 if(count_data > 0)
		 {
			 var form_data = $(this).serialize();
			 $.ajax({
				 url:"insert.php",
				 method:"POST",
				 data:form_data,
				 success:function(data)
				 {
					 $('#user_data').find("tr:gt(0)").remove();
					 $('#action_alert').html('<p>Data Inserted Successfully</p>');
					 $('#action_alert').dialog('open');
				 }
			 })
		 }
		 else
		 {
			 $('#action_alert').html('<p>Please Add atleast one data</p>');
			 $('#action_alert').dialog('open');
		 }
	 });

 });
