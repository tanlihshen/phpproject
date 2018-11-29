<!DOCTYPE html>
<html>
<body>
<?php

// Create connection
$conn = mysqli_connect('localhost','root','');

// Check connection
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE users";
if(mysqli_query($conn, $sql)){
	echo "DATABASE created!";
}else{
	echo "Error creating database: ".mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>