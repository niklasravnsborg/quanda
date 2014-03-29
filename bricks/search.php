<form id="search" action="index.php">
	<input type="text" name="search" placeholder="Ask or search a question..." <?php if(isset($_GET['search'])){echo('value="'.$_GET['search'].'"');}?>>
	<input type="submit" value="">
</form>	
