<?php

function printProjects() {
	include 'db.php';
	
	$uID = $_SESSION['userid'];
	$result = mysqli_query($dbConnect, "SELECT p_id FROM `$user_projects_table` WHERE u_id = $uID;");
	if(!$result) {
		return;
	}
	
	while($row = mysqli_fetch_array($result)) {
		printProject($row['p_id']);
	}
}

function printProject($pID) {
	include 'db.php';
	
	$result = mysqli_query($dbConnect, "SELECT name, description FROM `$projects_table` WHERE id = $pID;");
	if(!$result) {
		return;
	}
	
	while($row = mysqli_fetch_array($result)) {
		$pName = $row['name'];
		$pDes = $row['description'];
		if(strlen($pDes) > 20) {
			$pDes = (str_split($pDes, 20));
			$pDes = $pDes[0];
			$pDes = $pDes . '...';
		}
		
		include 'ProfileDiv.php';
	}
}

?>