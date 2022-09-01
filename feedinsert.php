<?php
session_start();
require_once('connection.php');
if (isset($_POST['submit']) && !isset($_POST['id'])) {
	echo $id=$_SESSION['r_id'];
	echo $comment=$_POST['comment'];
	$sql=$DB->feedback_data($comment);
	if ($sql) {
		header('location:home.php');
	}
	else{
		echo mysqli_error($DB);
	}
}

?>