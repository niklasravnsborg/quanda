<?php
	include("database.php");

	$connid = connect();
	$wrt = mysql_query("UPDATE questions Set answer = '".$_GET['answer']."' WHERE QID = '".$_GET['question']."'", $connid);
	if(!$wrt) die('TABLE ERROR');
	header("Location: ../view.php?question=".$_GET['question']);
?>
