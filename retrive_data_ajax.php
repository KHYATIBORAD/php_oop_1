<!-- AJAX DATA GET  -->
<?php
	include('dbconnection.php');
	$sql="select * from ajax_data";
	$stmp=$DB->query($sql);
	$DB->execute($sql);
	$data=$DB->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($data);
?>
