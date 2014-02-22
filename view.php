<?php 
include("./bricks/1_head.php");
?>
<?php 
include("./bricks/2_search.php");
?>

<?php
if(isset($_GET['question'])){
    include("./functions/view.php");
    view($_GET['question']);
} else {
    header("Location: ./");
}
?>

<?php
include("./bricks/3_foot.php");
?>