<?php

include("database.php");

function search($tag){
    unset($alltags);
    $tags = explode(" ", $tag);
    $connid = connect();
	$mysqltags = "";
	if(count($tags)<2)
	{
	  $mysqltags = "'%".$tags[0]."%'";
	}
	else
	{ 
	  $c = 0;
	  $f = count($tags)-1;
	  foreach($tags as $t)
	  { 
	    $mysqltags = $mysqltags."'%".$t."%'";
		if($f > $c)
		{
		  $mysqltags = $mysqltags.' OR tags LIKE ';
		}
		$c += 1;
	  }
	}
	
	$tids = mysql_query("SELECT QID, title, question, timestamp, answer FROM questions WHERE tags LIKE ".$mysqltags, $connid);
	if(!$tids) die('TABLE ERROR');
	while($tmp = mysql_fetch_array($tids)) {
	  $alltags[$tmp['QID']] = $tmp;
	  
	}
	if(!isset($alltags))
	{
	  $alltags = Null;
	}
	
	mysql_free_result($tids);
	return $alltags;
	}

	
function drawSearchResults($tag){
    $results = search($tag);
	if($results == Null){
	    echo("Leider sind keine Ergebnisse vorhanden!");
		include("./bricks/2_ask.php");
		return;
	}
	foreach($results as $result){
		$answ = "";
	    if($result['answer'] == ''){
		    $answ = "No answer!";
		} else {
			$answ = "Answered";
		}
		echo("<div class='search_result'><p class='result_title'><a href='http://".$_SERVER['HTTP_HOST']."/quanda_v2/view.php?question=".$result['QID']."'>".$result['title']."</a> ".$answ."</p><p class='result_date'>".$result['timestamp']."</p><p class='result_text'>".$result['question']."</p></div>");
	}
}
?>