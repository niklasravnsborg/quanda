<?php

	include("database.php");

	function write($title, $question, $tags){
		$connid = connect();
		$wrt = mysql_query("INSERT INTO questions (QID, timestamp, question, answer, title, tags) VALUES (NULL, CURRENT_TIMESTAMP, '".$question."', '', '".$title."', '".$tags."')", $connid);
		if(!$wrt) die('TABLE ERROR');

		return;
		}

?>
