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

$getName=mysqli_query($con,"select fname,lname from manager where username='$username' and password='$password'");

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
  <li><a href='AddProducts.php' class="active">Add Products</a></li>
  <li><a href='ViewProduct.php'>View Stock</a></li>
  <li><a href='ManagerProfile.php'>Profile</a></li>
  <li><a href='YourProducts.php'>Your Stock</a></li>
  <li><a href='SaleRecord.php'>Sale Record</a></li>
  <li><a href='ManagerLogout.php'>Log out</a></li>
</ul>

</div>


</body>
</html>