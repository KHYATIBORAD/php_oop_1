<?php
	require_once('database_connection/connection.php');
$sql="select * from users where (email='$email');";
      $res=mysqli_query($mysqli,$sql);
      if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
            	echo "email already exists";
        }
		}
else{	
//do your insert code here or do something 
}


 $select = mysqli_query($DB, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('This email address is already used!');
}
?>