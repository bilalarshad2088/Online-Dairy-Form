<?php
include_once('DatabaseConnection.php');
session_start();
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Manager/ManagerLogin.php");



}


if(isset($_SESSION['username']))
{


$username=$_SESSION['username'];
$password=$_SESSION['password'];

$getName=mysqli_query($con,"select fname,lname from cashier where username='$username' and password='$password'");

$Name=mysqli_fetch_array($getName);


}



?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $Name['fname']." ".$Name['lname']; ?></title>
	<link rel="stylesheet" type="text/css" href="ManagerPortalStyle.css">
</head>
<section>
	
  <h1>Online Dairy Form</h1>
  <p id="p1">Eat Healthy, Live Healthy</p>

</section>
<body background="office_desks_computers_style_modern_39302_1920x1200.jpg">
<div class="menu" >	
<h3><?php echo $Name['fname']." ".$Name['lname']; ?></h3>	

<ul>
  <li><a href='ViewStock.php' class="active">View Stock</a></li>
  <li><a href='CashierViewPrducts.php'>Sale Product</a></li>
  <li><a href='CashierProfile.php'>Profile</a></li>
  <li><a href='YourSale.php'>Your Sale</a></li>
  <li><a href='CashierLogout.php'>Log out</a></li>
</ul>

</div>


</body>
</html>