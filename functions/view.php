<?php

include("database.php");

function view($qid)
  {
    $connid = connect();
	$qids = mysql_query("SELECT title, question, answer FROM questions WHERE qid='".$qid."'", $connid);
	if(!$qids) die('TABLE ERROR');
	unset($qest);
	while($tmp = mysql_fetch_array($qids))
	{
	  $qest = [$tmp];
	}
	echo("<div id='view'><p class='view_title'><h3>".$qest[0]['title']."</h3></p><p class='view_question_text'>".$qest[0]['question']."</p><pclass='view_answer_text'>".$qest[0]['answer']."</p></div>");
	if($qest[0]['answer'] == ""){
		include("./bricks/2_answer.php");
	}
  }
  
?>