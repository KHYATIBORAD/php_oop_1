<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8 pt-5">
				<img src="img/log1.png" style="height: 80%;">
			</div>
			<div class="col-4">
				<form action="loginsert.php" method="POST">
					<div class="container-sm pt-5">
						<div class=" p-5 border rounded-5 bg-light">
							<h4 class="text-center">Login</h4>
							<br>
							<div class="row">
								<div class="form-group">
									<label for="email">Email id</label>
									<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email..." name="email" required autocomplete="off">
								</div>
							</div><br>
							<div class="row">
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password.." required>
								</div>
							</div><br>
							<div class="">
								<button type="login" class="btn btn-primary " id="login" name="login">Login</button>
							</div><br>
							<div>
								<a href="create.php" class="nav-link active" target="blank">create your account ..?</a>
							</div>
						</div>
					</div>
				</form>
			</div>			
		</div>
	</div>
</body>
</html>