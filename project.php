
<?php 
	session_start();
	
	include 'db.php';
	$pID = $_GET['pID'];
	
	$result = mysqli_query($dbConnect, "SELECT name, description FROM `$projects_table` WHERE id = $pID;");
	if(!$result) {
		return;
	}
	
	$row = mysqli_fetch_array($result);
	if(!$row) {
		return;
	}
	
	$pName = $row['name'];
	$pDesc = $row['description'];
	
	function printMilestones() {
		include 'db.php';
		
		$pID = $_GET['pID'];
		$result = mysqli_query($dbConnect, "SELECT name, description FROM `$milestones_table` WHERE p_id = $pID ORDER BY time ASC;");
		if(!$result) {
			return;
		}
		
		while($row = mysqli_fetch_array($result)) {
			$mName = $row['name'];
			$mDesc = $row['description'];
			
			include 'MilestoneDiv.php';
		}
	}
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
					echo "<h1>$pName</h1>";
					echo "<p class='subtitle'>$pDesc</p>";
				?>
				</div>
			
				<div id="newProject" class="greyBack">
					<?php
						echo "<p><a href='newMilestone.php?pID=$pID'>Create milestone</a></p>";
					?>
				</div>
				
				<div id="projects" class="greyBack">
					<h1>Current Deadlines</h1>
					
					<?php 
						printMilestones();
					?>
					

					
				</div>
				
			</div>
		</div>
		
        
    </body>
</html>
