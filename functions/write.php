<?php
	#include("database.php");

	function write($question) {
		$connid = connect();
		$wrt = mysql_query("INSERT INTO questions (QID, timestamp, question, answer) VALUES (NULL, CURRENT_TIMESTAMP, '".mysql_escape_string($question)."', '')", $connid);
		if(!$wrt) die('TABLE ERROR');

		return;
	}
?>
