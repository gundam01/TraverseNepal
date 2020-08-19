<?php

$mysqli = new mysqli('localhost','root','Ship6Bands','traversenepal');
//mysqli_select_db($con, 'traversenepal');

if($mysqli -> connect_errno) {
	echo "Database connection error: " . $mysqli -> connect_error;
	exit();
}

?>