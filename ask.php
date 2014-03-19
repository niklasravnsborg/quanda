<?php 
	include("./bricks/1_head.php");
	include("./bricks/2_search.php");

	if(isset($_GET['title']) and isset($_GET['question']) and isset($_GET['tags'])){
	    include("./functions/write.php");
	    write($_GET['title'], $_GET['question'], $_GET['tags']);
		header("Location: ./");
	} else {
	    header("Location: ./");
	}

	include("./bricks/3_foot.php");
?>
