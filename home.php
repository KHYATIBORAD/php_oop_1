<!-- for login -->
<?php 
session_start();
if(!isset($_SESSION['login']) && !$_SESSION['login']){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body style="background-color: #e6e6e6;">
	<div class="bg-light"><h3 class="text-center fw-semibold fst-italic">Corbital Technologies</h3>
		<nav class="navbar  bg-light">
			<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
				MENU
			</a>
			<div class="row  text-end">
				<div class="col-6 col-md-12">
					<form action="logout.php">
						<button type="logout" class="btn btn-primary btn-block" id="logout">Logout</button>
					</form>
				</div>
			</div>
			<!-- MENU BAR -->
			<div class="offcanvas offcanvas-start" id="offcanvasExample">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul>
						<li><a href="userlist.php" class="nav-link active " target="blank">User information</a></li>
						<li><a href="feedback.php" class="nav-link active " target="blank">Feedback</a></li>
						<li><a href="viewfeedback.php" class="nav-link active " target="blank">feedback information</a></li>
						<li><a href="devloper.php" class="nav-link active " target="blank">Devloper Detail</a></li>
						<li><a href="viewdevloper.php" class="nav-link active " target="blank">Devloper information</a></li>
						<li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link active " target="blank">customer</a></li>
						<li><a href="ajax_program/customer_ajax.php" class="nav-link active " target="blank">customer_ajax</a></li>
						<li><a href="ajax_program/ajax_example.php" class="nav-link active " target="blank">ajax_example</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- CUSTOMER EXAMPLE IN MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div >
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					<h3 class="text-center" id="exampleModalLabel">customer</h3>
				</div>
				<div class="modal-body">
					<div class="container">

						<div class="col-12">
							<form action="#" method="POST">
								<div class="container-sm pt-5">
									<div class="row">
										<div class="form-group">
											<label for="firstname">Firstname</label>
											<input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter your firstname..." name="firstname" required autocomplete="off">
										</div>
									</div><br>
									<div class="row">
										<div class="form-group">
											<label for="lastname">Lastname</label>
											<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter your lastname.." required>
										</div>
									</div><br>
									<div class="row">
										<div class="form-group">
											<label for="number">Number</label>
											<input type="text" name="number" class="form-control" id="number" placeholder="Enter your number.." required>
										</div>
									</div><br>
									<div class="">
										<button type="submit" class="btn btn-primary " id="submit" name="submit">submit</button>
									</div><br>
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>