<?php


$pID = $_GET['pID'];
$mName = $_POST['name'];
$mDesc = $_POST['desc'];

include 'db.php';
mysqli_query($dbConnect, "INTERT INTO `$milestones_table`(name, description, p_id) VALUES('$mName', '$mDesc', $pID);");

header("Location: project.php?pID=$pID");

?>