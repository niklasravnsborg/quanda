<h3>Answer question</h3>
<form action="./functions/answer.php">
	<input type="hidden" name="question" value=<?php echo("'".$qid."'");?>>
	<textarea name="answer" cols="50" rows="10"></textarea><br />
	<input type="submit" value="Answer" class="ask_button">
</form>
