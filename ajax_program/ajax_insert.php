<?php
	require_once("../database_connection/dbconnection.php");
	$table='ajax_data';
	$data=array(
		'name'=>$_POST['name'],
		'email'=>$_POST['email'],
		'password'=>$_POST['password'],
	);
	$res=$DB->insert($table,$data);	
?>