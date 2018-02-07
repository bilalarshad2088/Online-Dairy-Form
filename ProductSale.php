
<?php

include('DatabaseConnection.php');
include_once('CashierPortal.php');

if(isset($_GET['sale'])){
$emp_id=$_GET['sale'];

$result=mysqli_query($con,"select *from addProduct where productId='$emp_id' ");
$result2=mysqli_query($con,"select *from addProduct where productId='$emp_id' ");



while($row=mysqli_fetch_array($result)){


echo "<!DOCTYPE html>
<html>
<head>
	<title> $row[productName] </title>
	<link rel='stylesheet' type='text/css' href='ProductSaleStyle.css'>
</head>

<body>
<center><div>
<h1> $row[productName]'s  Detail </h1>

<form action='Reciept.php' method='post'> 
 <input name='id'  value= '$row[productId]'  type='hidden'><br> 
<input name='productName'  value='$row[productName]' type='hidden'> <br> 
<center><p id='font '>Quantity: &nbsp  &nbsp 
<input name ='quantity' value='$row[quantity]'> </p></center>  <br>
<input name='price' value='$row[price]' type='hidden' > <br>



<input name='catagory' value='$row[catagory]' type='hidden'> <br> 
<input name='companyName' value='$row[companyName]' type='hidden' >  <br> 
 
<input name='managerId' value='$row[managerId]' type='hidden'>  <br> 
<input type='submit' value='Sale' name='saleProduct' id='loginButton'> 
</form>
</div></center>
</body>
</html>";



}


}


?>


