<?php


include('DatabaseConnection.php');
include_once('ManagerPortal.php');

if(isset($_GET['productId'])){
$productId=$_GET['productId'];

$result=mysqli_query($con,"select *from addProduct where productId='$productId' ");


while($row=mysqli_fetch_array($result)){

echo "<!DOCTYPE html>
<html>
<head>
	<title> $row[productName]</title>
	<link rel='stylesheet' type='text/css' href='UpdateProductStyle.css'>
</head> 

<body>
<center><div>
<h1> $row[productName]'s Detail  </h1>
<form method ='post' action='YourProducts.php' >
 <input type='hidden' value='$row[productId]' name='productId'> <br> 
<font id='font'>Product Name:  &nbsp &nbsp &nbsp &nbsp &nbsp<input type = 'text' value = '$row[productName]' name = 'productName' height='6px' ></font> <br> 

<font id='font'>Product Quantity:&nbsp &nbsp &nbsp  <input type = 'text' value = '$row[quantity]' name= 'quantity' height='6px' ></font>  <br>
<font id='font'>Catagory: &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type = 'text' value = '$row[catagory]' name= 'catagory' height='6px' ></font>  <br>
<font id='font'>Company Name:  &nbsp &nbsp &nbsp <input type = 'text' value ='$row[companyName]' name = 'companyName' height='6px' ></font> <br> 
<font id='font'>Added By: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <label> $row[managerId]</labl></font>  <br> 
 

<input type ='submit' value='Update' name='update2' id='updateButton'> 
  </form>
  </div><center>
</body>
</html>";



}
}


?>

