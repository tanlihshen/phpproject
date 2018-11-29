<?php
session_start();
//hides all error
error_reporting(0);
ini_set('display_errors', 0);

//initialize variable
$name = "";
$email = "";
$okay = TRUE;
$errors = array();
$msg = array();

//connect to database
$db = mysqli_connect('localhost','root','');

mysqli_select_db($db, "users");

//register user
if(isset($_POST['reg_user'])) {
	//receive all user input from register.php
	$name =  $_POST['name'];
	$email =  $_POST['email'];
	$password = $_POST['password'];
	
	//validate if everything entered
	if(empty($name)) { array_push($errors, "<font color = 'red'> Name is required </font><br>"); $okay = FALSE; }
	if(empty($email)) { array_push ($errors, "<font color = 'red'> Email is required </font><br>"); $okay = FALSE; }
	if(empty($password)) { array_push ($errors, "<font color = 'red'> Password is required </font><br>"); $okay = FALSE; }
	
	if(empty($_POST['day']) ) {
	
	array_push ($errors, "<font color = 'red'> Date of birth is required </font><br>"); 
	$okay = FALSE;
	
	}
	if(empty($_POST['month']) ) {
    array_push ($errors, "<font color = 'red'> Month of birth is required </font><br>"); 
	$okay = FALSE;
	
	}
	
	if(empty($_POST['year'])) {
    array_push ($errors, "<font color = 'red'> Year of birth is required </font> <br>"); 
	$okay = FALSE;
	
	}
	
	$check = "SELECT * FROM users WHERE email ='$email' LIMIT 1";
	$results = mysqli_query($db, $check);
	$user = mysqli_fetch_array($results);
	
	
	if($user){
		if($user['email'] == $email) {
			array_push($errors, '<font color = \'red\'> Email already exist </font> <br>');
			$okay = FALSE;
		}
	}
	
		if($okay){
		$query = "INSERT INTO users (name, email, password)
				VALUES('$name', '$email', '$password')";
		mysqli_query($db, $query);
		array_push($msg, "You have successfully registered!");

		
		}
	
}//end of register validate

//login user
$okay2 = TRUE;
if(isset($_POST['log_user'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	
	if((empty($email)) ) {
	$okay2 = FALSE;
	array_push ($errors, "<font color = 'red'> Email is required </font><br>"); 
	
		
	}
	if((empty($password)) ) {
	$okay2 = FALSE;
	array_push ($errors, "Password is required <br>"); 
	
	}
	

	
	
if($okay2){
		$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'  ";
		$results = mysqli_query($db, $query);	
		$user = mysqli_fetch_array($results);
		
		if($user){	
		
		if( ($email == $_POST['email']) && ($password == $_POST['password']) ) {
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: profile.php');
			
		}
		
		if( ($email != $_POST['email']) && ($password != $_POST['password']) ) {
			
			header('location: contact.php');
			
		}			

	}
}

	
}//end of login validate





?>