<?php 
	if(isset($_GET['question'])){
	    include("./bricks/edit.php");
	} else {
	    header("Location: ../");
	}
?>
