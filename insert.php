<?php
session_start();
require_once("connection.php");
if(isset($_POST['submit']) && !isset($_POST['id']) ){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$cnfpassword=$_POST['cnfpassword'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$sql=$DB->insert_data($firstname,$lastname,$password,$cnfpassword,$contact,$email,$gender,$country);
	if($sql)
	{
		//header('location:index.php');
		header('location:create.php');
	}
	else
	{
		header('location:create.php');
	}
}
else{

	if(isset($_POST['submit']) && isset($_POST['id'])){
		$id = $_SESSION['r_id'];
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$contact =$_POST['contact'];
		$email =$_POST['email'];
		$gender =$_POST['gender'];
		$country =$_POST['country'];
		$sql=$DB->update_data($firstname,$lastname,$contact,$email,$gender,$country);
		if($sql== true){
			header("location:userlist.php");
		}else{
			echo  $DB->error;
		}
		echo  $DB->error;
	}
}

?>