<h3>Ask question</h3>
<form action="./ask.php">
Title:<br/>
<input name="title" type="text" size="30" maxlength="30" value=<?php echo("'".$_GET['search']."'");?>><br />
Question:<br />
<textarea name="question" cols="50" rows="10"></textarea><br />
Tags:<br />
<input name="tags" type="text" size="30" maxlength="40"></td><br />
<input type="submit" value="Ask" class="ask_button">
</form>