<?php 
	if(isset($_GET['question'])){
	    include("./functions/write.php");
	    write($_GET['question']);
		header("Location: ./");
	} else {
	    header("Location: ./");
	}
?>
