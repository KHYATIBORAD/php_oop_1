<?php
    include('database_connection/connection.php');
        $sql = $DB->delete_data();
        if($sql){
            header("Location:userlist.php");
        }else
        {
                echo mysqli_error($DB);
        }
?>