<?php

$dbConnect = mysqli_connect("127.0.0.1", "root", null, "carterth_pieproject");
	
#mysqli_query($dbConnect, "INSERT INTO users (name) VALUES ('carter')");
$comments_table = "comments";
$milestones_table = "milestones";
$projects_table ="projects";
$user_projects_table = "user-project";
$users_table = "users";

?>
