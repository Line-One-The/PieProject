<?php
include "db.php";



$user = $_POST['user'];

$password = $_POST['pass'];
$confirm = $_POST['confirm'];
$email = $_POST['email'];
$phone = $_POST['phone'];


if($password == $confirm){
	$password = md5($password);
	if (!$dbConnect) {
  			die('Could not connect: ' . mysqli_error());
			
	}
	$select = "SELECT * FROM users WHERE name='" . $user . "'";
	
 	if(mysqli_num_rows(mysqli_query($dbConnect, $select))<1){
	$query = "INSERT INTO users (name, password, email, phone) VALUES ('".$user."','". $password."','".$email."','".$phone."')";
		mysqli_query($dbConnect, $query);
		echo "User created";
	}
	else{
		echo "Username is already in the database. Please go back and try again.";
	}

}
else{
	echo "hold up bro";
}



mysqli_close($dbConnect);
?>
