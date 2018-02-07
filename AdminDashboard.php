<?php
include_once('DatabaseConnection.php');
session_start();
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Admin/AdminLogin.php");



}


if(isset($_SESSION['username']))
{


$username=$_SESSION['username'];
$password=$_SESSION['password'];

$getName=mysqli_query($con,"select username from adminlogin where username='$username' and password='$password'");

$Name=mysqli_fetch_array($getName);


}



?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $Name['username']?></title>
	<link rel="stylesheet" type="text/css" href="ManagerPortalStyle.css">
</head>
<section>
	
  <h1>Online Dairy Form</h1>
  <p id="p1">Eat Healthy, Live Healthy</p>

</section>
<body background="office_desks_computers_style_modern_39302_1920x1200.jpg">
<div class="menu" >	
<h3><?php echo $Name['username'] ?></h3>	

<ul>
  <li><a href="AddManagerForm.php">Add Manager</a></li><br>
<li><a href="AddCashierForm.php">Add Cashier</a></li><br>
<li><a href="CashierList.php">View Cashier List</a></li><br>
<li><a href="ManagerList.php">View Manager List</a></li><br>
<li><a href="AdminLogout.php">Logout</a><br></li>
</ul>

</div>


</body>
</html>