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
$sel=mysqli_query($link,"select * from 
profile where id='$id'");
$arr=mysqli_fetch_array($sel);
extract($_POST);
if(isset($submit))
{
  if(mysqli_query($link,"update profile set
  fname='$fn',lname='$ln',qua='$qua' where
  id='$id'"))
  {
	echo "<script>alert('Updated')
	</script>";  
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
            <td colspan="2"><div align="center"><strong>Edit Profile</strong></div></td>
          </tr>
          <tr>
            <td colspan="2"><?php
            echo $msg;?>
			</td>
          </tr>
          <tr>
            <td><strong>First Name</strong></td>
            <td><input type="text" name="fn" id="fn"
            value="<?php echo $arr['fname'];?>"></td>
          </tr>
          <tr>
            <td><strong>Last Name</strong></td>
            <td><input type="text" name="ln" id="ln"
            value="<?php echo $arr['lname'];?>"></td>
          </tr>
          <tr>
            <td><strong>Qualifications</strong></td>
            <td><input type="text" name="qua" id="qua"
            value="<?php echo $arr['qua'];?>"></td>
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