<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-3.6.1.js"></script>
	<title></title>
</head>
<body>
	<div class="container p-5">
		<form action="javascript:void(0)" method="POST">
			<div class="border rounded-5 bg-light p-5">
				<h1 id="p1"></h1>
				<h1>Form</h1>
				<div class="form-floating mb-3">
					<input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter name" autocomplete="off">
					<label for="floatingInput">Name</label>
				</div>
				<div class="form-floating mb-3">
					<input type="email" name="email" class="form-control" id="floatingInput" placeholder="Enter email" autocomplete="off">
					<label for="floatingInput">Email</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" name="password" class="form-control" id="floatingInput" placeholder="Enter password" autocomplete="off">
					<label for="floatingInput">Password</label>
				</div>
				<div class="row">
					<input type="submit" name="submit" class="btn btn-primary" id="submit">
				</div>
			</div>
		</form>
	</div>
	<!-- form validation in ajax -->
	<script>
		$(document).ready(function(){
			$('form').submit(function(){
				var formData=$(this).serialize();
				console.log(formData);

				$.ajax({
					url: 'ajax.php',
					type: 'POST',
					data: formData,
					dataType:"JSON",
				}).done(function(res){
					if(res.success==true){
						$('#p1').text("Success");
					}
					if(res.success==false){
						$('#p1').text("Not success");
					}
				});
			});
		});
	</script>
</body>
</html>