// ajax function for insert data
$(document).ready(function(){
	$('#registration_form').submit(function(e){
		e.preventDefault();
		var name = $('input[name="name"]').val();
		var email = $('input[name="email"]').val();
		var password = $('input[name="password"]').val();
		$.ajax({
			url: 'ajax_insert.php',
			type: 'POST',
			dataType:'html',
			data: {
				name : name,
				email : email,
				password : password
			}
		}).done(function(res) {
			$("#registration_form").trigger('reset');
			load_html_data("retrive_data_ajax.php", "get");
			$('#tbody').html('');
		});
	});
});
// ajax function for show data 
function load_html_data(url, type, dataType="html"){
	$.ajax({
		url: url,
		type: type,
		dataType: dataType
	}).done(function(data){
		if(dataType=='html'){
			$.each(JSON.parse(data), function(index, val) {
			$('#tbody').append('<tr><td>'+val.a_id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.password+'</td><td> <button class="btn btn warning btn-edit">Edit</button> <button class="btn btn danger btn-del">Delete</button> </td></tr>');
			});
		}
		else{
			$.each(data, function(index, val) {
			$('#tbody').append('<tr><td>'+val.a_id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.password+'</td></tr>');
			});
		}
	});
}