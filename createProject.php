<?php
include "db.php";
session_start();
if (!$dbConnect) {
  die('Could not connect: ' . mysqli_error());
			
}else{
$projectName = $_POST['name'];

$description = $_POST['description'];

$numUsers = $_POST['total'];

$userId = 11;//$_SESSION['userid'];

$usersToAdd = array();
$userIDs = array();


	$query = "INSERT INTO projects (name, ownerID, description) VALUES ('".$projectName."','".$userId."','".$description."')";
	mysqli_query($dbConnect, $query);
	$r2 =mysqli_fetch_row(mysqli_query($dbConnect, "SELECT id FROM projects WHERE name='".$projectName."' AND ownerID='".$userId."'"));
	$projectID = $r2[0];
for ($i = 0; $i < $numUsers; $i++) {
    $temp = $_POST['member'. ($i+1)];


	$r = mysqli_fetch_row(mysqli_query($dbConnect, "SELECT id FROM users WHERE name='".$temp."'"));
	

	mysqli_query($dbConnect, "INSERT INTO `user-project` (u_id, p_id) VALUES ('".$r[0]."','".$projectID."')");
}
mysqli_query($dbConnect,"INSERT INTO `user-project` (u_id, p_id) VALUES ('".$userId."'".$projectID."')");
echo "Project created";
}
?>
