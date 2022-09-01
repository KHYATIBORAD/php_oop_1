<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>

<body style="background-color: #d9d9d9;">
	<?php	
	include('connection.php');

	if(isset($_POST['r_id'])) {
		$sql=$DB->update_select();
		if($sql){

		}
		else{
			echo mysqli_error();
		}
		$row=mysqli_fetch_assoc($sql);

	}

	?>

	<!-- Container -->
	<div class="container">
		<div class="row">
			<div class="col-6"></div>
			<div class="col-6">
				<form action="insert.php" method="POST">
					<div class="container pt-5">

						<div class=" p-5 border bg-light">
							<h4 class="text-center">Registration Form</h4>
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
									<label class="form-lable">Password</label>
									<input type="Password" name="password" class="form-control" id="password" placeholder="create your Password" autocomplete="off" value="<?= $row['password'] ?? '' ?>" required>
								</div>
								<div class="col-12 col-md-6">
									<label class="form-lable">Confirm Password</label>
									<input type="Password" name="cnfpassword" class="form-control" id="cnfpassword" placeholder="Confirm Password" autocomplete="off" value="<?= $row['cnfpassword'] ?? '' ?>" required>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-12 col-md-6">
									<label class="form-lable">Contact</label>
									<input type="text" name="contact" class="form-control" required placeholder="Enter contact number.." autocomplete="off" minlength="10" maxlength="10" value="<?= $row['contact'] ?? ''?>">
								</div>
								<div class="col-12 col-md-6">
									<label class="form-lable">Email Id</label>
									<input type="email" name="email" class="form-control" required placeholder="Enter you email.." autocomplete="off" value="<?= $row['email'] ?? '' ?>">
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
								<div class="col-12 col-md-6">
									<label class="form-lable">Country</label>
									<select class="form-select" name="country" value="<?= $row['country'] ?? '' ?>">
										<option value="India">India</option>
										<option value="US">Us</option>
										<option value="Londan">Londan</option>
										<option value="Australia">Australia</option>
									</select>
								</div>
							</div>
							<br><br>

							<div class="row">
								<?php 
								if(isset($_POST['r_id'])){
									?>
									<input type="hidden" name="id" value="<?= $row['r_id'] ?>">
									<button type="submit" id="btnsubmit" class="btn btn-primary btn-block" name="submit" onclick="Validate()">Edit</button>
									<?php
								}
								else
								{
									?>
									<button type="submit" id="btnsubmit" class="btn btn-primary btn-block" name="submit" onclick="Validate()">Submit</button>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	
	<script>
		function Validate() {
			var password = document.getElementById("password").value;
			var cnfpassword = document.getElementById("cnfpassword").value;
			if (password !== cnfpassword) {
				alert("Passwords do not match.");
				return false;
			}
			return true;
		}
		
	</script>

</body>
</html>