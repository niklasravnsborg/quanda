<?php 
include("./bricks/1_head.php");
?>
<?php 
include("./bricks/2_search.php");
?>

<?php
if(isset($_GET['search'])){
    include("./functions/search.php");
    drawSearchResults($_GET['search']);
} else {
    header("Location: ../");
}
?>

<?php
include("./bricks/3_foot.php");
?>