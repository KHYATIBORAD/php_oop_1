<?php

	
// 	if(isset($_POST['submit']) && isset($_POST['id'])){
// 		$id = $_POST['id'];
// 		$firstname= $_POST['firstname'];
// 		$lastname= $_POST['lastname'];
// 		$password = $_POST['password'];
// 		$cnfpassword = $_POST['cnfpassword'];
// 		$contact =$_POST['contact'];
// 		$email =$_POST['email'];
// 		$gender =$_POST['gender'];
// 		$country =$_POST['country'];

// 		$query   =  "UPDATE register SET
// 		firstname='$firstname',
// 		lastname  = '$lastname',
// 		password   = '$password',
// 		cnfpassword  = '$cnfpassword',
// 		contact = '$contact',
// 		email    = '$email',
// 		gender    = '$gender',
// 		country    = '$country'
// 		WHERE r_id = '$id'";
// 		echo $query;
// 		$execute= mysqli_query($con, $query);
// 		if($execute== true){
// 			header("location:index.php");
// 		}else{
// 			echo  $con->error;
// 		}
// 		echo  $con->error;
// 	}
// }
require_once("connection.php");
$query=new dbManager();
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$cnfpassword=$_POST['cnfpassword'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$sql=$query->insert_data($firstname,$lastname,$password,$cnfpassword,$contact,$email,$gender,$country);
if($sql)
{
echo "<script>alert('Data inserted');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
?>