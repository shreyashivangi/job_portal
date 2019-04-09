<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Here</title>
<link rel="stylesheet" href="css/style.css"/>
</head>

<body>
<div class="main">
  <header class="header1"></header>
  <section class="container">
    <form id="form1" name="form1" method="post">
      <h2>&nbsp;</h2>
      <h2>Welcome user you are sucessfully registered</h2>
      <h3>Your id is :<?php
      echo $_GET['id'];
	  ?></h3>
      <h4>Your login page Here<a href="index1.php">click here</a></h4>
    </form>
  </section>
  <footer class="footer">
    <div align="center">Copyright &copy; 2015. All Right Reserved</div>
  </footer>
</div>
</body>
</html>