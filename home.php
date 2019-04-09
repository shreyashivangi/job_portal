<?php
session_start();
$id=$_SESSION['id'];
//for blank session
if($id=="")
{
header("location:index1.php");	
}
?>
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
  <nav class="menu">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="chpass.php">Change Password</a></li>
      <li><a href="logout.php">Logout</a></li>
      <li>Welcome :<?php echo $id;?></li>
    </ul>
  </nav>
  
  <section class="container">
    <div class="left">
      <img src="<?php echo "users/$id.jpg";?>"
       <width=150 height="150"/>
      <br/>
      <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="edit.php">Edit</a></li>
      </ul>
    </div>
    
    <div class="right"></div>
  </section>
  <footer class="footer">
    <div align="center">Copyright &copy; 2015. All Right Reserved</div>
  </footer>
</div>
</body>
</html>