<l-- head and information of website-->

<?php 
$ha ="active" ;  $title="Xcution"; 
?>

 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/head.php');?>
 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/menu.php');?>
 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/link.html');?>

 <l-- body of the page-->
 
  <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/freechampions.php');?>
  <div class="left">
  <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/latestarticles.php');?>
  
  
  
  
  </div>
  <div class="right">
  
  <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/homenews.php');?>
  
  
  </div>
 <l-- footer of the page-->
 <?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/ind/footer.php');?>
