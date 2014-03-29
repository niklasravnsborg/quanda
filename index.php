<!doctype html>
<html lang="en-us">
	<head>
		<title>Quanda</title>
		
		<meta name="robots" content="noindex, nofollow">
		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="en">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">

		<!--<base href="" />-->

		<!--<meta name="description" content="">-->
		<!--<meta name="author" content="">-->
		<!--<meta name="keywords" content="">-->
		
		<link rel="shortcut icon" href="./favicon.png">

		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.css">
		
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
	
		<header>
			<div id="menubutton">
				Menu
			</div><!--menubutton-->
		
			
		</header>
		<?php include("./layout/menu.php"); ?>	

		<main>
			<div class="inner">
			
				<div id="logo">
					<h1>Question & Answer</h1>
					<p>simple, fast, esay</p>
				</div><!--logo-->

				<?php include("./bricks/search.php") ?>
				<?php include("./search.php") ?>
			</div> <!-- .inner -->
			
		</main>
		
	</body>
</html>

