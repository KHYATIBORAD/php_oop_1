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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body style="background-color: #e6e6e6;">
	<div class="bg-light"><h3 class="text-center fw-semibold fst-italic">Corbital Technologies</h3>

		<nav class="navbar  bg-light">
			
			<a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
				MENU
			</a>
			<div class="row  text-end">
				<div class="col-6 col-md-12">
					<form action="logout.php">
						<button type="logout" class="btn btn-primary btn-block" id="logout">Logout</button>
					</form>
				</div>
			</div>
			<div class="offcanvas offcanvas-start" id="offcanvasExample">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul>
						
						<li><a href="userlist.php" class="nav-link active " target="blank">User information</a></li>
						<li><a href="feedback.php" class="nav-link active " target="blank">Feedback</a></li>
						<li><a href="viewfeedback.php" class="nav-link active " target="blank">Comment</a></li>
					</ul>
				</div>
			</div>

		</nav>
	</div>

	<div>
		<img src="img/1.jpg" class="rounded float-end" style="width:90vh;">
		
	</div>
</body>
</html>