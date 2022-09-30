<!-- form validation ajax file -->
<?php
	$errors=[];
	$data=[];

	if (empty($_POST['name'])) {
		$errors = "Name is required";
	}

	if (empty($_POST['email'])) {
		$errors = "Email is required";
	}

	if (empty($_POST['password'])) {
		$errors = "password is required";
	}

	if (!empty($errors)) {
		$data['success']=false;
		$data['errors']=$errors;
	}else{
		$data['success']=true;
		$data['message']='success';
	}
	echo json_encode($data);
?>