<?php
include_once('DatabaseConnection.php');
include_once('CashierPortal.php');


if(isset($_SESSION['username']))
{


$username=$_SESSION['username'];
$password=$_SESSION['password'];

$getName=mysqli_query($con,"select *from cashier where username='$username' and password='$password'");

$Name=mysqli_fetch_array($getName);


}



?>

<!DOCTYPE html>
<html>
<head>
	
<title> <?php echo $Name['fname']." ".$Name['lname']; ?></title>
	<link rel="stylesheet" type="text/css" href="ManagerProfileStyle.css">
</head>
<body>
 <div>	
<h1><?php echo $Name['fname']." ".$Name['lname']; ?></h1>
 <p > ID:<?php echo  $Name['id']; ?></p>
 <p >User Name:<?php echo $Name['username']; ?></p> 
 <p >Password:<?php echo $Name['password']; ?></p> 
 <p >Date of Birth:<?php echo $Name['dob']; ?></p> 
 <p >Salary:<?php echo $Name['salary']; ?></p> 
 <p >Email:<?php echo $Name['email']; ?></p> 
 <p >Position:<?php echo $Name['position']; ?></p> 

<p >Gender:<?php echo $Name['gender']; ?></p> <br>
</div>
</body>

</html>