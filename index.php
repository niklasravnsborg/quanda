<!doctype html>

<html>
	<head>
		<title>Quanda</title>
		
		<meta name="robots" content="noindex, nofollow" />
		<meta charset="utf-8">
		
		<link rel="shortcut icon" href="./favicon.png" type="image/x-icon" />
		
<!--		<base href="" />-->

<!--		<meta name="description" content="">-->
<!--		<meta name="author" content="">-->
<!--		<meta name="keywords" content="">-->

		<meta http-equiv="content-language" content="en">

		<link rel="stylesheet" type="text/css" href="./css/reset.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#menubutton").click(function(){
					$("#menu").slideToggle();
				});
			});
		</script>
	</head>

	<body>
		<div id="wrapper">
			<div id="topbar">
				<div id="menubutton">
					Menu
				</div><!--menubutton-->
			
				
				<?php 
					include("./layout/menu.php");
				?>
				
			</div><!--topbar-->

			<div id="content">
				<div id="logo">
					<h1>Question & Answer</h1>
					<p>simple, fast, esay</p>
				</div><!--logo-->

				<div id="searchbox">
					<form method="get" action="/search" id="search">
						<input name="q" type="text" size="40" placeholder="Ask or search a question..." />
					</form>
				</div><!--searchbox-->
				
				
				
				<!-- Hier bitte die verschiedenen Bricks einbauen -->				
				
				
				
			
			</div><!--content-->
		</div>
	</body>
</html>

