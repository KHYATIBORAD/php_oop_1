<?php
	require_once('../database_connection/dbconnection.php');
	$id=$_POST['a_id'];
	$sql = "DELETE FROM ajax_data WHERE a_id = $id";
	$stmp=$DB->query($sql);
	$data=$DB->execute($sql);
	echo json_encode($data);

?>