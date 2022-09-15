<?php
	require_once('connection.php');
	if(isset($_POST['deleteid'])){
	$delid=$_POST['deleteid'];
	$DB->deleteRecord($delid);
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
	<div class="container">
		<div class="row">
				<div class="col-6 col-md-12  p-lg-5">
				<div class="center">
					<h3 class="text-center">Comment</h3><br>
					<table class="table table-bordered">
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Comment</th>
							<th>Action</th>
						</tr>
						<?php
						$data=$DB->displayRecord();
						$sno=1;
						foreach($data as $value){
							?>
							<tr>
								<td><?php echo $sno++; ?></td>
								<td><?php echo $value['full_name'];?></td>
								<td><?php echo $value['email']; ?></td>
								<td><?php echo $value['comment']; ?></td>
								<td>
									
									<a href="viewfeedback.php" class="btn btn-primary">Delete</a>
								</td>
							</tr>
							<?php 
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>