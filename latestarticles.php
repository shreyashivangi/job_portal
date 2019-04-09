<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/head.php');


$query = "SELECT * FROM la ORDER BY date DESC";
$run = mysqli_query($db_server,$query);
if(!$run) die("Database access failed:" .mysqli_error($db_server));





?>

<div class="la">
<div class="lahead"><h2>Latest Articles</h2></div>
<div class="labody">
<?php
while($row = mysqli_fetch_assoc($run)){

$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$date = $row['date'];
?>

<div class="lapost">

<div id="lada" class="laposthead"><?php echo $title; ?></div>
<div id="lad" class="lapostbody">

<?php echo $description; ?><br><br>
<?php echo $date; ?>

</div>
</div>


<?php } ?>




</div>


</div>