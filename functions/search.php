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
	
	$tids = mysql_query("SELECT QID, question, timestamp, answer FROM questions WHERE tags LIKE ".$mysqltags, $connid);
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
		include("./bricks/ask.php");
		return;
	}
	foreach($results as $result){
		$answ = "";
	    if($result['answer'] == ''){
		    $answ = "No answer!";
		} else {
			$answ = "Answered";
		}
		echo("
			<div class='searchresult'>
				
				<!-- question -->
				<h2> ".$result['question']." </h2> 
				
				<!-- answer -->
				<p> ".$result['answer']." </p>
				
				
				
				<!-- unused:
					<p class='date'> ".$result['timestamp']." </p>
					<a href='http://".$_SERVER['HTTP_HOST']."/quanda_v2/view.php?question=".$result['QID']."'>".$result['question']."</a>
					".$answ."
				-->
				
			</div>
		");
	}
}
?>
