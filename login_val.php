<?php
session_start(); 
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$user_check_query = "SELECT * FROM users WHERE email='$email'";
	$user_check = $dbcon -> query($user_check_query);
	
	if($user_check->num_rows==0){


		$email_not_matched = "Your email not matched!";
	}else{


		$row = $user_check->fetch_assoc();
		if(password_verify($password, $row['password'])){

			if($row['status']==1){
				$waiting = "Waiting for admin approval";
			} else{
		
				$_SESSION['user_email'] = $email;
				$_SESSION['user_name']  = $row['fname'];
				$_SESSION['photo']      =$row['photo'];
				header('location: admin/about_me.php');
			}

			

		}else {

			$password_not_matched = "Your password not matched";
		}
	}
}


?>