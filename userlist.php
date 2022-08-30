<?php
include('connection.php'); 
// if($DB->select_data("register")){
  
// }
// else{
//     echo mysqli_error();
// }
// $query = "SELECT * FROM register";
// $sql =mysqli_query($DB,$query);
// if ($sql) {
// }else{
// 	echo mysqli_error($DB);
// }
 //$count = mysqli_num_rows($select);
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
	<div class="container pt-5">
		<div class="row">
			<div class="col-6 col-md-12">
				<table class="table table-bordered bg-light">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Firstname</th>
							<th scope="col">Lastname</th>
							<th scope="col">password</th>
							<th scope="col">cnfpassword</th>
							<th scope="col">contact</th>
							<th scope="col">email</th>
							<th scope="col">gender</th>
							<th scope="col">country</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php 
					$sql=$select_data->select_data();
					$count >0;
						while($row =mysqli_fetch_assoc($sql)){
							?>
							<tr>
								<td><?php echo $row['r_id'] ?></td>
								<td><?php echo $row['firstname'] ?></td>
								<td><?php echo $row['lastname'] ?></td>
								<td><?php echo $row['password'] ?></td>
								<td><?php echo $row['cnfpassword'] ?></td>
								<td><?php echo $row['contact'] ?></td>
								<td><?php echo $row['email'] ?></td>
								<td><?php echo $row['gender'] ?></td>
								<td><?php echo $row['country'] ?></td>
								<form action="create.php" method="post">
									<input type="hidden" name="r_id" value="<?= $row['r_id'] ?>">
									<!-- <td><a href="delete.php?r_id=<?php echo $row['r_id']?>" class="btn btn-primary" >Delete</a></td> -->
									<td><button type="submit" class="btn btn-secondary" >Update</button></td>
								</form>

								<form action="delete.php" method="post">
									<input type="hidden" name="r_id" value="<?= $row['r_id'] ?>">
									<!-- <td><a href="delete.php?r_id=<?php echo $row['r_id']?>" class="btn btn-primary" >Delete</a></td> -->
									<td><button type="submit" class="btn btn-secondary" >Delete</button></td>
								</form>

							</tr>
							<?php 
						
					}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>