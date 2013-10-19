
<?php	
	session_start();
	if(isset($_SESSION['userid'])) {
		header('Location: profile.php');
	}
	else if(empty($_POST["username"]) || empty($_POST["password"])) {
		include 'index.html';
		return;
	}
	else {
		include 'db.php';
		
		$username = mysql_escape_string($_POST["username"]);
		$password = $_POST["password"];
		
		$result = mysqli_query($dbConnect, "SELECT id, PASSWORD FROM `$users_table` WHERE name = '$username'");
		if(!$result) {
			include 'index.html';
			return;
		}
		
		$row = mysqli_fetch_array($result);
		if(!$row) {
			include 'index.html';
			return;
		}
		
		$ePwrd = $row['PASSWORD'];
		if($password != $ePwrd) {
			include 'index.html';
			return;
		}
		
		$_SESSION['userid'] = $row['id'];
		
		header('Location: profile.php');
	}
?>