<?php
	//start session
	session_start();

	//start buffer
	ob_start();
	
	
?>
<title>GRTech Scheduler</title>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
  		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

  		<!--Used for side panel adapted from www.building58.com/examples/tabSlideOut.html-->
  		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
		<script src="http://tab-slide-out.googlecode.com/files/jquery.tabSlideOut.v1.3.js"></script>

    	<script type="text/javascript">
		    $(function(){
		        $('.slide-out-div').tabSlideOut({
		            tabHandle: '.handle',                     //class of the element that will become tab
		            pathToTabImage: 'images/contact_tab.gif', //path to the image for tab //Optionally can be set using css
		            imageHeight: '122px',                     //height of tab image           //Optionally can be set using css
		            imageWidth: '40px',                       //width of tab image            //Optionally can be set using css
		            tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
		            speed: 300,                               //speed of animation
		            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
		            topPos: '200px',                          //position from the top/ use if tabLocation is left or right
		            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
		            fixedPosition: false                      //options: true makes it stick(fixed position) on scroll
		        });

		    });

		</script>	

		<!--custom css-->
		<link rel="stylesheet" href="../assets/css/site.css">
</head>

<body>


 <!--Main Page Container-->
<div class="container">
	
	<!--title div-->
	<div class="row" id="title">
	    <center><span><img alt="Green River" src="../assets/img/grtech.jpg"></span></center>
	</div>

	<div id="byroom">
		<div class = "row">
			<div class = "btn-group btn-group-justified" id="pagechoice">
				<!--Button to view by location...this will change to be a drop down of classes-->
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">View By Location<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="tc116.php">TC116</a></li>
							<li><a href="tc118.php">TC118</a></li>
							<li><a href="tc120.php">TC120</a></li>
							<li><a href="hl147.php">HL147</a></li>
						</ul>	
				</div>
				<!--Button to view by instructor...this will change to be a drop down with instructors-->
				<div class = "btn-group">
 					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">View By Instructor<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="alan.php">Alan Carter</a></li>
							<li><a href="ken.php">Ken Hang</a></li>
							<li><a href="krish.php">Krish Mahadevan</a></li>
							<li><a href="simone.php">Simone Jarzabek</a></li>
							<li><a href="tina.php">Tina Ostrander</a></li>
							<li><a href="tim.php">Tim Mason</a></li>
							<li><a href="spunky.php">Angela "Spunky" Robinson</a></li>
						</ul>
				</div>
			</div>
		</div>

	<!--Schedule area, this should eventually be based on chosen room or insturctor-->	
	<?php

		include 'tc116.php';
		/*create a function to navigate which room/instructor will be viewed here, default is tc116*/
		include 'tc118.php';
		include 'tc120.php';
		include 'hl147.php';
	?>
	</div>

	<?php
		include 'navbar.php';
	?>

<!--Need to add a footer-->
</div>
</body>

<?php
	//flush buffer
	ob_flush();
?>




