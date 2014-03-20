<?php 
	if(isset($_GET['question'])){
	    include("./functions/view.php");
	    view($_GET['question']);
	} else {
	    header("Location: ./");
	}
?>
