<?php
	require_once('../database_connection/dbconnection.php');
	$id=$_REQUEST['a_id'];
	$sql = "SELECT * FROM ajax_data WHERE a_id = '$id'";
	$stmp=$DB->query($sql);
	$DB->execute($sql);
	$data=$DB->fetch(PDO::FETCH_OBJ);
	echo json_encode($data);
?>
	
	