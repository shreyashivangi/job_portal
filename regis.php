<?php
error_reporting(0);
include("conn.php");
extract($_POST);
if(isset($regis))
{
	if($cap==$ec)
	{
  if(mysqli_query($link,"insert into regis
  values('$id','$uname','$pass','$radio',
  $age,'$city','$sq','$ans')"))
  {
	mysqli_query($link,"insert into profile
	(id) values('$id')");  
	move_uploaded_file($_FILES['att']
	['tmp_name'],"users/$id.jpg");
	header("location:welcome.php?id=$id");
  }
  else
  {
	  $msg="user already registered";
  }
	}
	else
	{
	$msg="Enter corect captcha";	
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
  <section class="container">
    <form method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="56%" border="0" align="center" cellpadding="3" cellspacing="3">
        <tr>
          <td colspan="2"><div align="center"><strong>Regis Here</strong></div>            
		  <div align="center"></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
          <?php echo $msg;?></div>           
		  <div align="center"></div></td>
        </tr>
        <tr>
          <td><strong>Id</strong></td>
          <td><strong>
            <input name="id" type="text" required id="id">
          </strong></td>
        </tr>
        <tr>
          <td><strong>Password</strong></td>
          <td><strong>
            <input name="pass" type="password" required id="pass">
          </strong></td>
        </tr>
        <tr>
          <td><strong>Uname</strong></td>
          <td><strong>
            <input type="text" name="uname" id="uname">
          </strong></td>
        </tr>
        <tr>
          <td><strong>You Are</strong></td>
          <td><strong>
            <input type="radio" name="radio" id="radio" value="Employer">
            Employer
            <input type="radio" name="radio" id="radio2" value="Employee">
            Employee
          </strong></td>
        </tr>
        <tr>
          <td><strong>Age</strong></td>
          <td><strong>
            <input name="age" type="text" required id="age">
          </strong></td>
        </tr>
        <tr>
          <td><strong>City</strong></td>
          <td><strong>
            <select name="city" id="city">
              <option value="Delhi">Delhi</option>
              <option value="Noida">Noida</option>
              <option value="Banglore">Banglore</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Kolkata">Kolkata</option>
			  <option value="Gurgaon">Gurgaon</option>
			  <option value="Faridabad">Faridabad</option>
			  <option value="Himachal Pradesh ">Himachal Pradesh</option>
			  <option value="Jaipur">Jaipur</option>
			  <option value="Dehradun">Dehradun</option>
			  <option value="Ranchi">Ranchi</option>
			  <option value="Gujarat">Gujarat</option>
			  <option value="Andhra Pradesh">Andhra Pradesh</option>
            </select>
          </strong></td>
        </tr>
        <tr>
          <td><strong>Sq</strong></td>
          <td><strong>
            <select name="sq" id="sq">
              <option value="What is ur pet name?">What is your pet name?</option>
              <option value="What is ur fav Color?">What is your fav Color?</option>
            </select>
          </strong></td>
        </tr>
        <tr>
          <td><strong>Answer</strong></td>
          <td><strong>
            <input name="ans" type="text" required id="ans">
          </strong></td>
        </tr>
        <tr>
          <td><strong>Captcha</strong></td>
          <td>
            <?php
			include("captcha.php");
			?>
          </td>
        </tr>
        <tr>
          <td><strong>Enter Captcha</strong></td>
          <td><strong>
            <input name="ec" type="text" required id="ec">
          </strong></td>
        </tr>
        <tr>
          <td><strong>Image</strong></td>
          <td><strong>
            <input name="att" type="file" required id="att">
          </strong></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <strong>
            <input type="submit" name="regis" id="regis" value="Submit">
            <input type="reset" name="reset" id="reset" value="Reset">
          </strong></div></td>
        </tr>
      </table>
    </form>
  </section>
  <footer class="footer">
    <div align="center">Copyright &copy; 2015. All Right Reserved</div>
  </footer>
</div>
</body>
</html>