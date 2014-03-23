<?php

include("database.php");

function search($tag){
    unset($alltags);
    $tags = explode(" ", $tag);
    $connid = connect();
	$mysqltags = "";
	if(count($tags)<2)
	{
	  $mysqltags = "'%".strtolower($tags[0])."%'";
	}
	else
	{ 
	  $c = 0;
	  $f = count($tags)-1;
	  foreach($tags as $t)
	  { 
	    $mysqltags = $mysqltags."'%".strtolower($t)."%'";
		if($f > $c)
		{
		  $mysqltags = $mysqltags.' OR LOWER(question) LIKE ';
		}
		$c += 1;
	  }
	}
	
	$tids = mysql_query("SELECT QID, question, timestamp, answer FROM questions WHERE LOWER(question) LIKE ".$mysqltags, $connid);
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
		    $result['answer'] = "No answer!";
		}
		echo("
			<div class='searchresult'>
				<p class='question'> ".$result['question']." </p> 
				<p class='answer'> ".$result['answer']." </p>
				<div class='question'>
					<p> ".$result['question']." </p> 
				</div>
				
				<div class='answer'>
					<p> ".$result['answer']." </p>
				</div>
				
				
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
