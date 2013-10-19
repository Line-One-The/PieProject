<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Pie Project</title>
</head>
<body>

	<?php	
		if(empty($_POST["username"]) || empty($_POST["password"])) {
			include 'Login.html';
			return;
		}
		else {
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			$con = "";
			$result = mysqli_query($con, 'SELECT ID, password FROM ' . $users_table . ' WHERE username = ' . mysql_escape_string($username) . ';');
			$row = mysqli_fetch_array($result);
			if(!$row) {
				echo 'Invalid username.';
				include 'Login.html';
				return;
			}
			
			$ePwrd = $row['password'];
			if(password != ePwrd) {
				echo 'Invalid password.';
				include 'Login.html';
				return;
			}
			
			$_SESSION['userid'] = $row['ID'];
			
			http_redirect('Profile.php');
		}
	?>
</body>
</html>