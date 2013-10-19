<?php


$pID = $_GET['pID'];
$mName = $_POST['name'];
$mDesc = $_POST['desc'];

include 'db.php';
mysqli_execute("INTERT INTO `$milestones_table` VALUES($mName, $mDesc);");

header("project.php?pID=$pID");

?>