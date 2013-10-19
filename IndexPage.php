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
				<div id="advertise">
					<h1>Come on and slam with pIE pROJECT sIMULATOR!!</h1>
					<ul>
						<li>Manage your own projects.</li>
						<li>Collaborate with others.</li>
						<li>Monitor and record your progress.</li>
						<li>Set up deadlines and milestones.</li>
					</ul>
				</div>
				
				<div id="login">
					<p><a>Login</a> | <a>Register</a></p>
					<h1>Let's get in there!</h1>
					
					<form action="index.php" method="post">
						Username<br>
						<input class="styledButton" type="text" name="username"><br><br>
						Password<br>
						<input class="styledButton" type="password" name="password">
						<br><br>
						<input type="submit" value="submit">
					</form>
					
				</div>
			</div>
		</div>
		
        
    </body>
</html>
