
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
		
		<script>
			var number = 1
			function addNewMemberLine()
			{
				number = number + 1;
			
				
				var element= document.createElement("input");
				
				element.setAttribute("class", "styledButton");
				element.setAttribute("type", "text");
				element.setAttribute("value", "");
				element.setAttribute("name", "member" + number);
				
				var foo = document.getElementById("memberList");
				
				foo.appendChild(element);
				var breakLine = document.createElement("br");
				foo.appendChild(breakLine);
				var breakLine = document.createElement("br");
				foo.appendChild(breakLine);
				
				


			}
		
		</script>
		
    </head>
	
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	
		<div id="header" class="greyBack">
			<h1> <img src="images/ProjectPie.png" /> </h1>
		</div>
	
		<div id="main">
		
			<div id="container">
				<div id="login" class="greyBack">
					<h1>Start a new project!</h1>
					
					<form action="createUser.php" method="post" id="form">
						Project Name<br>
						<input class="styledButton" type="text" name="name"><br><br>
						Description<br>
						<input class="styledButton" type="text" name="description"><br><br>
						Members<br>
						<div id="memberList">
							<input class="styledButton" type="text" name="member1"><br><br>
						</div>
						<p><a href="Javascript: addNewMemberLine();">Add new user</a></p>
						<input type="submit" value="submit">
					</form>
					
				</div>
			</div>
		</div>
		
        
    </body>
</html>
