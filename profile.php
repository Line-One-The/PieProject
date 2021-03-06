<?php 
	include 'ProfileFuncs.php';
	session_start();
	
	include 'db.php';
	
	$uID = $_SESSION['userid'];
	$result = mysqli_query($dbConnect, "SELECT name FROM `$users_table` WHERE id = $uID;");
	if(!$result) {
		return;
	}
	
	$row = mysqli_fetch_array($result);
	if(!$row) {
		return;
	}
	
	$uName = $row['name'];

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pie Project</title>
        <meta name="description" content="Do your pie projects.">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/global.css">
		
    </head>
	
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	
		<?php 
			include 'header.php';
		?>
	
		<div id="main">
		
			<div id="container">
				<div id="title" class="greyBack">
					<?php
					
						echo "<h1>Welcome $uName!</h1>";
					
					?>
				</div>
			
				<div id="newProject" class="greyBack">
					<p><a href="login.html">Create new project</a></p>
				</div>
				
				<?php
					printProjects();
				?>
				
			</div>
		</div>
		
        
    </body>
</html>
