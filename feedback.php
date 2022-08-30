<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="center">Application Login Page</h1>	
					<h6 class="center">Login or register from here to access.</h6>
			</div>
			<div class="col-md-6">
				<form action="feedinsert.php" method="POST">
					<div class="container-sm pt-5">
						<div class=" p-5 border bg-light">
							<h4 class="text-center">feedback</h4>
							<br>
							<div class="row">
								<div class="form-group">
									<label for="comment">comment</label>
									<input type="text" class="form-control" id="comment"  placeholder="Enter your email..." name="comment" required autocomplete="off">
								</div>
							</div><br>
							
							<div class="">
								<button type="submit" class="btn btn-primary ">submit</button>
							</div><br>
							
						</div>
					</div>

				</form>
			</div>			
		</div>
	</div>

</body>
</html>