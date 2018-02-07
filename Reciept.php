

<?php
include_once('DatabaseConnection.php');
include_once('CashierPortal.php');

if(isset($_POST['saleProduct']))
{

  $id=$_POST['id'];
  $productName=$_POST['productName'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];

if($quantity!=0){
  $totalBill=$quantity*$price;
}
 if($quantity!=0) {
echo "<div>";
 echo "<h3>Reciept<h3>";
  echo '<label > Product ID:'. $id.'</label><br>';
  echo '<label> Product Name:'.$productName.'</label><br>'; 
  echo '<label> Quantity:'.$quantity.'</label><br>'; 
  echo '<label> Price(Per Unit):'.$price.'</label><br>'; 
  echo '<label>Total Bill:'.$totalBill.'</label><br>';  
  echo "</div>"; 
}
  
  else if($quantity==0){

    echo "<div><label>You Are out of Stock!!!</label></div>";

  }

 
  
}
if(isset($_POST['saleProduct']))
{
    $id=$_POST['id'];
  $productName=$_POST['productName'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
  $companyName=$_POST['companyName'];

   mysqli_query($con,"update addProduct set   quantity=quantity-$quantity 
         where productId='$id'");




}

if(isset($_POST['saleProduct']))
{


$username=$_SESSION['username'];


$getMangerID=mysqli_query($con,"select id from cashier where userName='$username'");
$ManagerID=mysqli_fetch_array($getMangerID);

 $ID=$ManagerID['id'];

 $id=$_POST['id'];

 $soldBy=$ID;
  $productName=$_POST['productName'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
  $companyName=$_POST['companyName'];
  if($quantity!=0 )
  $totalBill=$quantity*$price;
  if($quantity!=0)
  $saleRecord=mysqli_query($con,"insert into salerecord(productId,productName,quantity,price,companyName,totalBill,cashierId) values ('$id','$productName','$quantity','$price','$companyName','$totalBill','$soldBy')");


}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Reciept</title>
  <link rel="stylesheet" type="text/css" href="RecieptStyle.css">
</head>
<body>

</body>
</html>