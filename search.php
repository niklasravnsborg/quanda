<?php 
	if(isset($_GET['search'])){
		include("./functions/search.php");
		drawSearchResults($_GET['search']);
	} else {
		#header("Location: ../");
	}
?>
