<?php
include("conn.php");
error_reporting(0);
extract($_POST);
if(isset($login))
{
	$sel=mysqli_query($link,"select id,
	uname,pass from regis where id='$id' 
	or uname='$id'");
	$arr=mysqli_fetch_array($sel);
	if(($id==$arr['id'] or $id==$arr['uname'])
	and $pass==$arr['pass'])
	{
		session_start();
		$_SESSION['id']=$arr['id'];
		header("location:home.php");
	}
	else
	{
	$msg="enter correct id and pass";	
	}
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

    <div class="flip-container" id='flippr'>
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

<h1 class="text" id="welcome">Welcome. <span>please login.</span></h1>
  <header class="header1"></header>
  <section class="container">
    <form id="form1" name="form1" method="post">
      <table width="41%" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
          <td colspan="2"><div align="center"><strong>Login Here</strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $msg;?>
          
          </td>
        </tr>
        <tr>
          <td><strong>Id | Uname</strong></td>
          <td><strong>
            <input name="id" type="text" required="required" id="id">
          </strong></td>
        </tr>
        <tr>
          <td><strong>Password</strong></td>
          <td><strong>
            <input name="pass" type="password" required="required" id="pass">
          </strong></td>
        </tr>
        <tr>
          <td><strong>
            <input type="checkbox" name="checkbox" id="checkbox">
          </strong></td>
          <td><strong>Remember Me</strong></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <strong>
            <input type="submit" name="login" id="login" value="Submit"> 
            <a href="regis.php">New User</a></strong></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><strong><a href="#">Forget Password</a></strong></div></td>
        </tr>
		<div class='hint'>
<p> Hint:<br>
    <span>Username = Gaurav<br> 
      Password = Aditya</span></p>
</div>
		
      </table>
    </form>
  </section>
  </div>
  
  </body>
  <footer class="footer">
    <div align="center">Copyright &copy; 2015. All Right Reserved</div>
  </footer>

</body>
</html>