<?php 
	include("./bricks/head.php");


	include("./bricks/search.php");



	if(isset($_GET['question'])){
	    include("./bricks/edit.php");
	} else {
	    header("Location: ../");
	}



	include("./bricks/foot.php");
?>
