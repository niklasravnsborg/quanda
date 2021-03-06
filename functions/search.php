<?php
	include("database.php");

	function search($tag){
		unset($alltags);
		$tags = explode(" ", $tag);
		$connid = connect();
		$mysqltags = "";
		if(count($tags)<2) {
			$mysqltags = "'%".strtolower($tags[0])."%'";
		} else { 
			$c = 0;
			$f = count($tags)-1;
			foreach($tags as $t) { 
				$mysqltags = $mysqltags."'%".strtolower($t)."%'";
			
				if($f > $c) {
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
	
		if(!isset($alltags)) {
			$alltags = Null;
		}
	
		mysql_free_result($tids);
		return $alltags;
	}

	
	function drawSearchResults($tag) {
		$results = search(mysql_escape_string($tag));
		if($results == Null){
			echo("Your question is asked!");
			include("./functions/write.php");
			write($_GET['search']);
			header("Location: index.php?search=".$_GET['search']);
			return;
		}

		foreach($results as $result) {
			$answ = "";
			if($result['answer'] == '') {
				$result['answer'] = "No answer!";
			}
		
			echo("
				<div class='searchresult'>

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
