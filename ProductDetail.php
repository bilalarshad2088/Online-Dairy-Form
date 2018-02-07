
<?php

include('DatabaseConnection.php');
include_once('CashierPortal.php');

if(isset($_GET['detail'])){
$emp_id=$_GET['detail'];

$result=mysqli_query($con,"select *from addProduct where productId='$emp_id' ");
$result2=mysqli_query($con,"select *from addProduct where productId='$emp_id' ");

while($row2=mysqli_fetch_array($result2)){


$totalPrice =$row2['quantity']*$row2['price'];



}

while($row=mysqli_fetch_array($result)){


echo "<!DOCTYPE html>
<html>
<head>
	<title> $row[productName] </title>
	<link rel='stylesheet' type='text/css' href='ProductDetailStyle.css'>
</head>

<body>
<center><div>
<h1> $row[productName]'s  Detail </h1>
<font id='font'>Product ID:  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp $row[productId] </font><br> 
<font id='font'>Product Name:  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp $row[productName]</font> <br> 
<font id='font'>Quantity: &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  $row[quantity] </font>  <br>
<font id='font'>Price: &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp $row[price] </font>  <br>
<font id='font'>Total Price: &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp   &nbsp$totalPrice</font>  <br>


<font id='font'>Catagory:  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp $row[catagory]</font> <br> 
<font id='font'>Company Name: &nbsp  &nbsp   &nbsp  &nbsp &nbsp &nbsp  $row[companyName]</font>  <br> 
 
<font id='font'>Added By:  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp $row[managerId]</font>  <br> 


</div></center>
</body>
</html>";



}


}


?>


