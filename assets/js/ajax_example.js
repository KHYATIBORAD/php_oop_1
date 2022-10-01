// ajax function for insert data & update data request
$(document).ready(function(){
	$('#registration_form').submit(function(e){
		e.preventDefault();
		var a_id = $('#a_id').val();
	    var name = $('#name').val();
	    var email = $('#email').val();
	    var password = $('#password').val();
	    if(name == "" || email=="" || password == "")
        {
            $('#message').html('Please Fill Your Details ');
        }
        else
        {
		$.ajax({
			url: 'ajax_insert.php',
			type: 'POST',
			dataType:'html',
			data: {
				a_id : a_id,
				name : name,
				email : email,
				password : password
			}
		}).done(function(res) {
			$("#registration_form").trigger('reset');
			load_html_data("retrive_data_ajax.php", "get");
		});
		}	
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
			$('#tbody').empty();
			$.each(JSON.parse(data), function(index, val) {
			$('#tbody').append('<tr><td>'+val.a_id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.password+'</td><td><button class="btn btn-outline-warning btn-edit" btn-e_id='+val.a_id+'>Edit</button></td><td><button class="btn btn-outline-danger btn-del" btn-did='+val.a_id+'>Delete</button></td></tr>');
			});
		}
		else{
			$('#tbody').empty();
			$.each(data, function(index, val) {
			$('#tbody').append('<tr><td>'+val.a_id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.password+'</td></tr>');
			});
		}
		//delete data
		$('#tbody').on('click', '.btn-del', function () {
			var id = $(this).attr('btn-did');
			var res={ a_id : id};
			load_html_data_delete('ajax_delete_data.php', 'post', res );
		});
		//update data
		$('#tbody').on('click', '.btn-edit', function () {
			var id = $(this).attr('btn-e_id');
			$.ajax({
					url: 'ajax_select_data.php',
					type: 'POST',
					dataType: 'html',
					data:{a_id : id},
				}).done(function (data){
					var ajaxdata=JSON.parse(data);
					$('#a_id').val(ajaxdata.a_id);
					$('#name').val(ajaxdata.name);
					$('#email').val(ajaxdata.email);
					$('#password').val(ajaxdata.password); 
				});
		});
	});
}
// ajax function  data delete
function load_html_data_delete(url, type, data, dataType="html"){
	$.ajax({
		url: url,
		type: type,
		dataType: dataType,
		data:data,
	}).done(function (data){
		location.reload();
	});
}