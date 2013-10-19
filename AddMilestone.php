<?php


$pID = $_GET['pID'];
$mName = $_POST['name'];
$mDesc = $_POST['desc'];

include 'db.php';
mysqli_query($dbConnect, "INTERT INTO `$milestones_table`(name, description, p_id) VALUES('$mName', '$mDesc', $pID);");

$result = mysqli_query($dbConnect, "SELECT u_id FROM `$user_projects_table` WHERE p_id=$pID;");
if(!$result) {
	return;
}

while($row = mysqli_fetch_array($result)) {
	sendMessage($row['u_id']);
}

header("Location: project.php?pID=$pID");

function sendMessage($uID) {
	include 'db.php';
	
	$result = mysqli_query($dbConnect, "SELECT email FROM `$users_table` WHERE id=$uID;");
	if(!$result) {
		return;
	}
	
	$row = mysqli_fetch_array($result);
	if(!$row) {
		return;
	}
	$email = $row['email'];
	
	mail($email, "New Milestone", "New Milestone", null, null);
}
?>