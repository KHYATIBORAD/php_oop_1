<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.6.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="ajax_example.js"></script>
	<title></title>
</head>
<body>
	<div class="container pt-5">
		<div class="alert alert-primary">
			<h2 class="text-center">---AJAX---PHP---JQUERY---BOOTSTRAP5.2---</h2>
		</div>
		<div class="row pt-5">
			<div class="col-4 ">
				<div class="rounded-4 bg-light p-5">
					<form id="registration_form">
						<h4 class="alert alert-success text-center">ADD</h4>
						<div class="form-floating mb-3">
							<input type="text" name="name" class="form-control" placeholder="enter name" autocomplete="off" id="name">
							<label for="floatingInput">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" name="email" class="form-control" placeholder="enter email" autocomplete="off" id="email">
							<label for="floatingInput">Email</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" name="password" class="form-control" placeholder="enter password" id="password">
							<label for="floatingInput">Password</label>
						</div>
						<div>
							<input type="submit" class="btn btn-primary" name="submit">
						</div>
					</form>
				</div>
			</div>
			<div class="col-8">
				<div class="rounded-4 bg-light p-5">
					<h4 class="alert alert-info text-center">SHOW DATA</h4>
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th>PASSWORD</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody id="tbody"></tbody>
					</table>
				</div>
			</div>
		</div>	
	</div>
	<script type="text/javascript">
		load_html_data("retrive_data_ajax.php", "get");
	</script>
</body>
</html>