<?php
include('DatabaseConnection.php');
session_start();
if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=$_POST['password'];

 $usernameSearch= mysqli_query($con,"select username from adminlogin where username='$username'");
 $passwordSearch=mysqli_query($con,"select password from adminlogin where password='$password'");

 

$usernameFound=mysqli_fetch_array($usernameSearch);
$passwordFound=mysqli_fetch_array($passwordSearch);



if($usernameFound==0){

	$usernameErr= "User Name did not Match";
}

if($passwordFound==0)
{
	
	$passwordErr="Password did not Match";
}
if($usernameFound>0 && $passwordFound>0)
{
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;
	header("refresh:1,url='AdminDashboard.php'");
}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="AdminLoginCss.css">
</head>

<body background="sunset_over_a_misty_lake-1680x1050.jpg">
<section >
	
  <h1>Online Dairy Form</h1>
  <p id="p1">Eat Healthy, Live Healthy</p>
</section>

<ul>
  <li><a class="active" href="http://localhost/online%20Dairy/Admin/AdminLogin.php">Admin Login  </a></li> 
  <li><a href="http://localhost/online%20Dairy/Manager/ManagerLogin.php">Manager Login</a></li>
  <li><a href="http://localhost/online%20Dairy/Cashier/CashierLogin.php">Cashier Login</a></li>
  <li><a href="#about">About</a></li>
</ul>
<center><div>
	<h3>Admin Login</h3>
<form method="post" action="AdminLogin.php" >
<p>Username<br>
 <input type="text" name="username" placeholder="Enter Username">
<br> 
	

<?php
if(isset($_POST['login'])){
    if($usernameFound==0)
     echo $usernameErr;

}


?>
</p>
	<p>
	Password<br>
	<input type="password" name="password" placeholder="Enter Password">
	<br>
	
	<?php
if(isset($_POST['login'])){
    if($passwordFound==0)
     echo $passwordErr.'<br>';

}


?>
</p>
	<input type="submit" value="Login" name="login" id="loginButton"> 
</form></div></center>
</body>
</html>

