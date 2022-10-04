<?php
session_start();
require_once("database_connection/connection.php");
if(isset($_POST['submit']) && !isset($_POST['id']) ){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$cnfpassword=$_POST['cnfpassword'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$res =$DB->select_email();
	if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
        	header('location:create.php?msg');
        }
	} else {
		$sql=$DB->insert_data($firstname,$lastname,$password,$cnfpassword,$contact,$email,$gender,$country);
		if($sql)
		{
			header('location:index.php');
		}
		else
		{
			header('location:create.php');
		}
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
		$sql=$DB->update_data($firstname,$lastname,$	contact,$email,$gender,$country);
		if($sql== true){
			header("location:userlist.php");
		}else{
			echo  $DB->error;
		}
		echo  $DB->error;
	}
}
?>