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

	// this is view user data selection 
	public function select_data(){
		$result=mysqli_query($this->DB,"select * from register");
		return $result;
	}

	//this is user data updation
	public function update_data($firstname,$lastname,$contact,$email,$gender,$country){
		$id=$_POST['id'];
		$update=mysqli_query($this->DB,"UPDATE register SET
		                     firstname='$firstname',
		                     lastname  = '$lastname',
		                     contact = '$contact',
		                     email    = '$email',
		                     gender    = '$gender',
		                     country    = '$country'
		                     WHERE r_id = '$id'");
		return $update;
	}

	//this is user data delete
	public function delete_data(){
		$id=$_POST['r_id'];
		$delete=mysqli_query($this->DB,"DELETE FROM register WHERE r_id= '$id' ");

		return $delete;
	}

	//login check method to user login 
	public function login_check($table, $email, $password){
		$query=mysqli_query($this->DB,"select * from register where email='$email' and password='$password'");
		$row = mysqli_fetch_array($query);
		if(!empty($row)){
			$_SESSION['login'] = true;  
			$_SESSION['r_id'] = $row['r_id'];  
			$_SESSION['email'] = $row['email'];  
			$_SESSION['password'] = $row['password'];
			return true;
		}
		return false;
	}

	// this is user update data to fetch data selection
	public function update_select(){
		$id = $_POST['r_id'];
		$select =mysqli_query($this->DB,"SELECT * FROM register WHERE r_id='".$id."'");
		return $select;
	}

	// this is feedback comment insert method.
	public function feedback_data($comment){
		$id=$_SESSION['r_id'];
		
		$query=mysqli_query($this->DB,"insert into feedback(r_id,comment) values('$id','$comment')");
		return $query;
	}

	//display feedback data
	public function displayRecord(){
		$sql="SELECT CONCAT(register.firstname,' ',register.lastname) AS full_name, register.email, feedback.comment FROM register JOIN feedback ON register.r_id=feedback.r_id";
		$result=$this->DB->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$data[]=$row;
			}
			return $data;
		}
	}

	//feedback delete records
	public function deleteRecord($delid){
		$sql="DELETE FROM feedback WHERE f_id='$delid'";
		$result=$this->DB->query($sql);
		if($result){
			header('location:viewfeedback.php');
		}else{
			echo "Error".$sql."<br>".$this->DB->error;
		}
	}

	//devloper detail insert
	public function devloperinsert($post){
		$id=$_SESSION['r_id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$experience=$_POST['experience'];
		$language=$_POST['language'];
		$project=$_POST['project'];

		$sql="INSERT INTO devloper(r_id,firstname,lastname,gender,experience,language,project) VALUES('$id','$firstname','$lastname','$gender','$experience','$language','$project')";
		$result=$this->DB->query($sql);
		if($result){
			header("location:home.php");
		}else{
			echo mysqli_error();
		}

	}

	//display devloper record
	public function diplayDevloper(){
		$sql="SELECT * FROM devloper";
		$result=$this->DB->query($sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$data[]=$row;
			}
			return $data;
		}
	}

	//Delete devloper record
	public function del_devloper($delid){
		$sql="DELETE FROM devloper WHERE d_id='$delid'";
		$result=$this->DB->query($sql);
		if($result){
			header('location:viewdevloper.php');
		}else{
			echo "Error".$sql."<br>".$this->DB->error;
		}
	}

	//Select devloper data
	public function select_devdata($editid){
		$sql="SELECT * FROM devloper WHERE d_id='$editid'"; 
		$result=$this->DB->query($sql);
		if($result->num_rows==1){
			$row=$result->fetch_assoc();
			return $row;
		}
	}


	//update records
	public function updateRecord($post){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$experience=$_POST['experience'];
		$language=$_POST['language'];
		$project=$_POST['project'];
		$editid=$_POST['hid'];
		$sql="UPDATE devloper SET firstname='$firstname',lastname='$lastname',gender='$gender',experience='$experience',language='$language',project='$project' WHERE d_id='$editid'";
		$result=$this->DB->query($sql);
		if($result){
			header("location:viewdevloper.php");
		}else{
			echo "Error".$sql."<br>".$this->DB->error;
		}
	}
}
?>