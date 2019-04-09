<?php
require_once 'login.php';

 $db_server = mysqli_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL:" .mysqli_connect_error());
 mysqli_select_db($db_server, $db_database)
 or die("Unable to select database: " .mysqli_error($db_server));
?>