<?php 
	include("./bricks/1_head.php");


	include("./bricks/2_search.php");



	if(isset($_GET['question'])){
	    include("./bricks/2_edit.php");
	} else {
	    header("Location: ../");
	}



	include("./bricks/3_foot.php");
?>
