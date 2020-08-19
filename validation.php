<?php

session_start();

require_once "connection.php";

$name = $_POST['email'];
$pass = $_POST['password'];

$sql = " select * from usertable where email = '$name' && password = '$pass'";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['email'] = $name;
	header('location:home.php');
}
else{
	header('location:login.php');
}

?>