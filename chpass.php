<?php
error_reporting(0);
session_start();
$id=$_SESSION['id'];
//for blank session
if($id=="")
{
header("location:index1.php");	
}
// for change password
include("conn.php");
extract($_POST);
if(isset($submit))
{
$sel=mysqli_query($link,"select pass from
regis where id='$id'");	
$arr=mysqli_fetch_array($sel);
if($op==$arr['pass'])
{
	if($np==$cp)
	{
	mysqli_query($link,"update regis set
	pass='$np' where id='$id'");
	$msg="Password change";
	}
	else
	{
	$msg="Np and cp are not match";	
	}
}
else
{
  $msg="Old pass is not correct";	
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
       width=150 height="150"/>
      <br/>
      <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="edit.php">Edit</a></li>
      </ul>
    </div>
    
    <div class="right">
      <form id="form1" name="form1" method="post">
        <table width="50%" border="1" cellspacing="3" cellpadding="3">
          <tr>
            <td colspan="2"><div align="center"><strong>Change Password</strong></div></td>
          </tr>
          <tr>
            <td colspan="2"><?php
            echo $msg;?>
			</td>
          </tr>
          <tr>
            <td><strong>OP</strong></td>
            <td><strong>
              <input name="op" type="password" required="required" id="op">
            </strong></td>
          </tr>
          <tr>
            <td><strong>New Pass</strong></td>
            <td><strong>
              <input type="password" name="np" id="np">
            </strong></td>
          </tr>
          <tr>
            <td><strong>Con Pass</strong></td>
            <td><strong>
              <input name="cp" type="password" required="required" id="cp">
            </strong></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <strong>
              <input type="submit" name="submit" id="submit" value="Submit">
            </strong></div></td>
          </tr>
        </table>
      </form>
    </div>
  </section>
  <footer class="footer">
    <div align="center">Copyright &copy; 2015. All Right Reserved</div>
  </footer>
</div>
</body>
</html>