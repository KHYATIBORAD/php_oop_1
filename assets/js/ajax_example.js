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
			$('#tbody').append('<tr><td>'+val.a_id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.password+'</td><td><button class="btn btn-outline-warning btn-edit" btn-e_id='+val.a_id+'>Edit</button></td><td><button class="btn btn-outline-danger btn-del" btn-did='+val.a_id+'>Delete</button></td></tr>');
			});
		}
		else{
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
			console.log('update');
			var id = $(this).attr('btn-e_id');
			console.log(id);
			$.ajax({
					url: 'ajax_example.php',
					type: 'POST',
					dataType: 'html',
					data:{a_id : id},
				}).done(function (data){
					console.log(data);
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