
<?php	
	session_start();
	if(isset($_SESSION['userid'])) {
		header('Location: profile.php');
	}
	else if(empty($_POST["username"]) || empty($_POST["password"])) {
		include 'IndexPage.php';
		return;
	}
	else {
		include 'db.php';
		
		$username = mysql_escape_string($_POST["username"]);
		$password = $_POST["password"];
		
		$result = mysqli_query($dbConnect, "SELECT id, PASSWORD FROM `$users_table` WHERE name = '$username'");
		if(!$result) {
			include 'IndexPage.php';
			return;
		}
		
		$row = mysqli_fetch_array($result);
		if(!$row) {
			include 'IndexPage.php';
			return;
		}
		
		$ePwrd = $row['PASSWORD'];
		if($password != $ePwrd) {
			include 'IndexPage.php';
			return;
		}
		
		$_SESSION['userid'] = $row['id'];
		
		header('Location: profile.php');
	}
?>