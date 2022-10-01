<?php 
session_start();
    include('database_connection/connection.php');
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($DB->login_check("register", $email, $password)){
            header('location:home.php');
        }
        else{
            header('location:index.php');
        }
?>