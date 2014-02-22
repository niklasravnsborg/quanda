<?php 
include("./bricks/1_head.php");
?>
<?php 
include("./bricks/2_search.php");
?>

<?php
if(isset($_GET['question'])){
    include("./bricks/2_edit.php");
} else {
    header("Location: ../");
}
?>

<?php
include("./bricks/3_foot.php");
?>