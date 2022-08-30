<?php

class dbManager{	
	protected $DB;
	protected $db_dbserver = "localhost";
	protected $db_user = "root";
	protected $db_pass = "root";
	protected $db_dbname = "demo";

	/*
		this method will help to connect mysql server.
		if there is any error then return error description
		otherwise it will return connection object
	 */
	public function __construct(){
		try{
			if ($this->DB = mysqli_connect($this->db_dbserver, $this->db_user, $this->db_pass, $this->db_dbname)){
				
				
				return $this->DB;
			}
			else{
				throw new Exception('Unable to connect');
			}
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}

	// insert method to insert data in table
	public function insert_data($firstname,$lastname,$password,$cnfpassword,$contact,$email,$gender,$country){
		$query=mysqli_query($this->DB,"INSERT INTO register(firstname,lastname,password,cnfpassword,contact,email,gender,country) VALUES('$firstname','$lastname','$password','$cnfpassword','$contact','$email','$gender','$country')");
		return $query;
		
	}

	public function select_data(){
		$result=mysqli_query($this->DB,"select * from register");
 		return $result;
		   // $select = array();  
     //       $query = "SELECT * FROM register";  
     //       $result = mysqli_query($this->DB, $query);
     //       while($row = mysqli_fetch_assoc($result))  
     //       {  
     //            $select[] = $row;  
     //       }  
     //       return true;  
	}

	public function update_data($query){
		return $query;
	}

	public function delete_data($query){
		return $query;
	}

	 //login check method to user login 
	public function login_check($table, $email, $password){
		$query=mysqli_query($this->DB,"select * from register where email='$email' and password='$password'");
		$row = mysqli_fetch_array($query);
		if(!empty($row)){
			 	$_SESSION['login'] = true;  
                $_SESSION['r_id'] = $row['id'];  
                $_SESSION['email'] = $row['email'];  
                $_SESSION['password'] = $row['password'];
			return true;
		}
		return false;
	}
}
?>