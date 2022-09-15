<?php 
	require_once('connection.php');
	if(isset($_GET['deleteid'])){
		$delid=$_GET['deleteid'];
		$DB->del_devloper($delid);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6 col-md-12">
				<table class="table table-bordered bg-light">
					<h3 class="text-center">Devloper data</h3><br>
					<tr>
						<th>Sr.no</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Gender</th>
						<th>Experience</th>
						<th>Language</th>
						<th>Project</th>
						<th colspan="2">Action</th>
					</tr>
					<?php
						$data=$DB->diplayDevloper();
						$sno=1;
						foreach($data as $value){
					?>
					<tr>
						<td><?php echo $sno++; ?></td>
						<td><?php echo $value['firstname']; ?></td>
						<td><?php echo $value['lastname']; ?></td>
						<td><?php echo $value['gender']; ?></td>
						<td><?php echo $value['experience']; ?></td>
						<td><?php echo $value['language']; ?></td>
						<td><?php echo $value['project']; ?></td>
						<td>
							<a href="devloper.php?editid=<?php echo $value['d_id']; ?>" class="btn btn-primary">Edit</a>
							<a href="viewdevloper.php?deleteid=<?php echo $value['d_id']; ?>" class="btn btn-primary">Delete</a>
						</td>
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