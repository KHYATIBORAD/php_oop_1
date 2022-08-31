<?php
session_start();
require_once('connection.php');
if (isset($_POST['submit']) && !isset($_POST['id'])) {
	$id=$_SESSION['id'];
	$comment=$_POST['comment'];
	$sql=$DB->feedback_data($rid,$comment);
	if ($sql) {
		header('location:home.php');
	}
	else{
		echo mysqli_error($DB);
	}
}

?>