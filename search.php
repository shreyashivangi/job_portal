<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/head.php');
$q = $_POST['search'];

$query = "SELECT * FROM la where keywords LIKE '%$q%'";
$run = mysqli_query($db_server,$query);
if(!$run) die("Database access failed:" .mysqli_error($db_server));

while($row = mysqli_fetch_array($run)){
$id = $row['id'];	
$title = $row['title'];	
$description = $row['description'];
$keywords = $row['keywords'];	
$date = $row['date'];	

echo "$title" . "<br>" . $description . "<br>" . $date . "<br><br>";
	
	
}

?>