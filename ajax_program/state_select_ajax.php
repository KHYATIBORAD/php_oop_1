<?php
	require_once('../database_connection/dbconnection.php');
	$sql='SELECT * FROM ajax_state';
	$DB->query($sql);
	$DB->execute($sql);
	$result=$DB->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/jquery-3.6.1.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/select_state_ajax.js"></script>
	<title></title>
</head>
<body>
	<div class="container pt-5">
		<div class="alert alert-primary">
			<h3 class="text-center">---DYNAMIC_DATA---AJAX---JQUERY---BOOTSTRAP5.2---</h3>
		</div>
		<div class="row">
			<!-- select--drpdown -->
			<div class="col-md-4">
				<div class="container pt-5">
					<div class="bg-light p-5 rounded-3">
						<table>
						<tr><h4>Select State</h4></tr>
						<td>
						<select class="form-control" id="select_state">
						<option>-------Select state---------</option>
						<?php foreach ($result as $results): ?>
						<option value="<?= $results->s_id; ?>"><?php echo $results->state; ?></option>
						<?php endforeach ?>
						</select>
						</td>
						<td><span id="msg"></span></td>
						</table>
					</div>
				</div>
			</div>
			<!-- select--dropdown--OVER---HEAR -->
			<div class="col-md-8">
				<div class="container pt-5">
					<div class="bg-light rounded-4 p-5">
						<div id="city_data"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>