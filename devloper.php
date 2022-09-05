<?php
session_start();
require_once('connection.php');
if(isset($_POST['submit'])){
	$DB->devloperinsert($_POST);
}

//update Record
if(isset($_POST['update'])){
	$DB->updateRecord($_POST);
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
<body>
		<!-- Container -->
	<div class="container-fluid">
		<div class="row ">
			<div class="col-6 pt-5">
				
				<img class="image" src="img/dev1.jpg" style="height:35%;">
			</div>
			<div class="col-6">
				<!--Edit record-->
					<?php
					if(isset($_GET['editid'])){
						$editid=$_GET['editid'];
						$myrecord=$DB->select_devdata($editid);
					?>
				<form action="devloper.php" method="POST">
					<div class="container pt-4">

						<div class="border bg-light p-5  ">

							<h4 class="text-center">Devloper Detail</h4>
							<br>
							<div class="row">
								<div class="col-12 col-md-6">
									<label class="form-lable">Firstname</label>
									<input type="text" name="firstname" class="form-control" required placeholder="Enter your firstname.." autocomplete="off" value="<?= $myrecord['firstname'] ?? '' ?>">
								</div>
								<div class="col-12 col-md-6">
									<label class="form-lable">Lastname</label>
									<input type="text" name="lastname" class="form-control" required placeholder="Enter your lastname.." autocomplete="off" value="<?= $myrecord['lastname'] ?? '' ?>">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-12 col-md-6">
									<label class="form-lable " for="genderl">Gender</label><br>

									<input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php if($myrecord['gender'] == 'Female') { echo 'checked'; } ?>>
									<label class="form-label form-check-inline" for="female">
										Female
									</label><br>


									<input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if($myrecord['gender'] == 'Male') { echo 'checked'; } ?>>
									<label class="form-label form-check-inline" for="male">
										Male
									</label>

								</div>
								</div>
								<div class="row">
									<label class="form-lable">Your Experience</label>
									<input type="year" name="experience" class="form-control" id="experience" placeholder="Enter your experience" autocomplete="off" value="<?= $myrecord['experience'] ?? '' ?>" required>
								</div>
							
							<br>
							<div class="row">
								
									<label class="form-lable">Language</label>
									<input type="language" name="language" class="form-control" required placeholder="which  language do you work.?" autocomplete="off"  value="<?= $myrecord['language'] ?? ''?>">
								</div><br>
								<div class="row">
									<label class="form-lable">Project</label>
									<input type="project" name="project" class="form-control" required placeholder="Enter your runnig project.." autocomplete="off" value="<?= $myrecord['project'] ?? '' ?>">
								</div>
							
							<br>
							
							<div class="row">
								<div class="col-6 col-md-10">
									<!-- <input type="submit" name="submit" id="submit" value="Login" class="btn btn-dark"> -->
									<input type="hidden" name="hid" value="<?php echo $myrecord['d_id']; ?>">
									<input type="submit" name="update" id="update" value="update" class="btn btn-primary">
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php		}else{
				?>
			<form action="devloper.php" method="POST">
					<div class="container pt-4">

						<div class="border bg-light p-5  ">

							<h4 class="text-center">Devloper Detail</h4>
							<br>
							<div class="row">
								<div class="col-12 col-md-6">
									<label class="form-lable">Firstname</label>
									<input type="text" name="firstname" class="form-control" required placeholder="Enter your firstname.." autocomplete="off" value="<?= $row['firstname'] ?? '' ?>">
								</div>
								<div class="col-12 col-md-6">
									<label class="form-lable">Lastname</label>
									<input type="text" name="lastname" class="form-control" required placeholder="Enter your lastname.." autocomplete="off" value="<?= $row['lastname'] ?? '' ?>">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-12 col-md-6">
									<label class="form-lable " for="genderl" value="<?= $row['gender'] ?? '' ?>">Gender</label><br>

									<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
									<label class="form-label form-check-inline" for="female">
										Female
									</label><br>


									<input class="form-check-input" type="radio" name="gender" id="male" value="Male">
									<label class="form-label form-check-inline" for="male">
										Male
									</label>

								</div>
								</div>
								<div class="row">
									<label class="form-lable">Your Experience</label>
									<input type="year" name="experience" class="form-control" id="experience" placeholder="Enter your experience" autocomplete="off" value="<?= $row['experience'] ?? '' ?>" required>
								</div>
							
							<br>
							<div class="row">
								
									<label class="form-lable">Language</label>
									<input type="language" name="language" class="form-control" required placeholder="which  language do you work.?" autocomplete="off"  value="<?= $row['contact'] ?? ''?>">
								</div><br>
								<div class="row">
									<label class="form-lable">Project</label>
									<input type="project" name="project" class="form-control" required placeholder="Enter your runnig project.." autocomplete="off" value="<?= $row['project'] ?? '' ?>">
								</div>
							
							<br>
							
							<div class="row">
								<div class="col-6 col-md-10">
									<!-- <input type="submit" name="submit" id="submit" value="Login" class="btn btn-dark"> -->
									<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Register">
								</div>
							</div>
						</div>
					</div>
				</form>
				<?php 
					}
				?>									
			</div>
		</div>
	</div>


</body>
</html>