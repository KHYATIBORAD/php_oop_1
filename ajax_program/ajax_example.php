<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/jquery-3.6.1.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/ajax_example.js"></script>
	<title></title>
</head>
<body>
	<div class="container pt-5">
		<div class="alert alert-primary">
			<h2 class="text-center">---AJAX---PHP---JQUERY---BOOTSTRAP5.2---</h2>
		</div>
		<!-- update table -->
		<?php 
			require_once('../database_connection/dbconnection.php');
				if(isset($_GET['btn-e_id'])){
					$id=$_POST['a_id'];
					$sql="select * from ajax_data";
					$stmp=$DB->query($sql);
					$DB->execute($sql);
					$data=$DB->fetchAll(PDO::FETCH_OBJ);
					echo "<pre>";
					print_r ($data);
					echo "</pre>";
					exit();
					echo json_encode($data);
		?>
		<div class="row pt-5">
			<div class="col-4 ">
				<div class="rounded-4 bg-light p-5">
					<form id="registration_form">
						<h4 class="alert alert-success text-center">ADD</h4>
						<div class="form-floating mb-3">
							<input type="text" name="name" class="form-control" placeholder="enter name" value="<?php echo $myrecord->name; ?>" autocomplete="off" id="name">
							<label for="floatingInput">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" name="email" class="form-control" placeholder="enter email" value="<?php echo $myrecord->email; ?>"autocomplete="off" id="email">
							<label for="floatingInput">Email</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" name="password" class="form-control" placeholder="enter password" value="<?php echo $myrecord->password; ?>"  id="password">
							<label for="floatingInput">Password</label>
						</div>
						<div>
							<input type="submit" class="btn btn-outline-primary" name="submit">
						</div>
					</form>
				</div>
			</div>
			<?php 
				}
				else{
			?>
			<!-- insert data table -->
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
							<input type="submit" class="btn btn-outline-primary" name="submit">
						</div>
					</form>
				</div>
			</div>
			<?php 
				}
			?>
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