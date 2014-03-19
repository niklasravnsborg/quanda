<?php 
	include("./bricks/head.php");


	include("./bricks/search.php");



	if(isset($_GET['question'])){
	    include("./functions/view.php");
	    view($_GET['question']);
	} else {
	    header("Location: ./");
	}



	include("./bricks/foot.php");
?>
