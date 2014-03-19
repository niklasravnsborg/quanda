<?php 
	include("./bricks/head.php");
	include("./bricks/search.php");


	if(isset($_GET['search'])){
	    include("./functions/search.php");
	    drawSearchResults($_GET['search']);
	} else {
	    header("Location: ../");
	}


	include("./bricks/foot.php");
?>
