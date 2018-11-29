<!DOCTYPE html>
<html>
<body>
<?php

//create connection
$conn = mysqli_connect('localhost','root','');
// check connection
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "users");
//sql to create table
$sql = "CREATE TABLE users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL
)";

if(mysqli_query($conn, $sql)) {
	echo "Table users created!";
}else {
	echo "Error creating table: ". mysqli_error($conn);
}
?>
</body>
</html>