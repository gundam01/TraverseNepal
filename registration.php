<?php

session_start();

require_once "connection.php";

$name = $_POST['email'];
$pass = $_POST['password'];

$sql = " select * from usertable where email = '$name'";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
	echo " Email already exists";
}
else{
	$reg = " Insert into usertable(email, password) values ('$name' , '$pass')";
	mysqli_query($mysqli, $reg);
	$link = 'index.php';
	echo "Registration Successful. Please <a href = '$link'>click here</a> "."to login";
}
 
?>