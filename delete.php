<?php

include('connection.php');


$id =$_POST['r_id'];

$delete ="DELETE FROM register WHERE r_id='".$id."'"; 

$sql = mysqli_query($con,$delete);
if($sql){
    header("Location:userlist.php");

}else
{
    echo mysqli_error($con);
}

?>