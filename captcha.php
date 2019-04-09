<?php
$str=substr(md5(time()),0,6);
$col=array("black","green","blue","cyan","red");
$colr=array_rand($col);
echo "<label style='color:$col[$colr]; font-size:30px; text-align:center'>$str</label>";
echo "<input type='hidden' name='cap'
 value='$str'/>";
?>