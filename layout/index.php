<!doctype html">

<html>
	<head>
		<title>Q&A</title>
		
		<meta name="robots" content="noindex, nofollow" />
		<meta charset="utf-8">
		
		<link rel="shortcut icon" href="./favicon.png" type="image/x-icon" />
		
<!--		<base href="" />-->

<!--		<meta name="description" content="">-->
<!--		<meta name="author" content="">-->
<!--		<meta name="keywords" content="">-->

		<meta http-equiv="content-language" content="en">

		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		
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
		<div id="topbar">
			<div id="menubutton">
				Menu
			</div><!--menubutton-->
			
			<div id="menu">
				Hier bitte mit php menu.html verlinken
			</div>
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
			
		</div><!--content-->
	</body>
</html>

