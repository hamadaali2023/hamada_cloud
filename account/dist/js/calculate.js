		$(document).ready(function () {  
				$(document).on("click", ".classAdd", function () { 
					var rowCount = $('.data-contact-person').length + 1;  
					var contactdiv = '<tr class="data-contact-person">' +  	
						'<td><input type="text" name="firstname' + rowCount + '" class="form-control f-name01" /></td>' +  
						'<td><input type="text" name="lastname' + rowCount + '" class="form-control l-name01" /></td>' + 					  
						'<td class="price-column"><input type="text" name="email' + rowCount + '" class="form-control email01" /></td>' +
						'<td><button type="button" id="btnDelete" class="deleteContact btn btn btn-danger btn-xs">Remove</button></td>' + 
						'</tr>';
							
					$('#maintable').append(contactdiv);  
					 calculateSalary();
				});

				$('.email01').keyup(function () {
						var sum = 0;
						$('.email01').each(function() {
							 sum += Number($(this).val());						 
						});
						$('#sum-salary').val( sum);
				});
					
				function calculateSalary(){
					$('.email01').keyup(function () {
						var sum = 0;
							$('.email01').each(function() {
								sum += Number($(this).val());						 
							});
						$('#sum-salary').val( sum);
					});				
				}
					
				$(document).on('click','.deleteContact', function (e){
					e.preventDefault();
					$(this).parent().parent().remove();
				});
			
		});  
	  	
	
		