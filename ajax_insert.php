<?php
	require_once("dbconnection.php");
	$table='ajax_data';
	$data=array(
		'name'=>$_POST['name'],
		'email'=>$_POST['email'],
		'password'=>$_POST['password'],
	);
	$res=$DB->insert($table,$data);	
?>