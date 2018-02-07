

<?php
include_once('DatabaseConnection.php');
include_once('ManagerPortal.php');
if (isset($_POST['submit'])){

$username=$_SESSION['username'];


$getMangerID=mysqli_query($con,"select id from manager where userName='$username'");
$ManagerID=mysqli_fetch_array($getMangerID);

 $ID=$ManagerID['id'];

$productName=$_POST['textfield'];
$quantity=$_POST['textfield2'];
$catagory=$_POST['textfield3'];
$companyName=$_POST['textfield4'];
$addedBy=$ID;
$productPrice=$_POST['textfield6'];

if(empty($productName)){

  $emptyName= '<p>'."Please Enter Product Name".'</p>'.'<br>';
}
if(empty($quantity)){

  $emptyQuantity= '<p>'."Please Enter Quantity".'</p>'.'<br>';
}
if(empty($catagory)){

  $emptyCatagory= '<p>'."Please Enter Catagory".'</p>'.'<br>';
}
if(empty($companyName)){

  $emptyComName= '<p>'."Please Enter Company Name".'</p>'.'<br>';
}

if(empty($productPrice)){

   $emptyPrice='<p>'."Please Enter Price".'</p>'.'<br>';
}

else if( !empty($productName) && !empty($quantity) && !empty($catagory) && !empty($companyName) && !empty($addedBy) && !empty($productPrice)){
$result=mysqli_query($con,"insert into addProduct(productName,quantity,price,catagory,companyName,managerId) values('$productName','$quantity',$productPrice,'$catagory','$companyName','$addedBy')" );
$successEntry= '<p>'."Product Detail Successfully Entered!!!!".'</p>';
}



}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Product Form</title>
<link rel="stylesheet" type="text/css" href="AddProductsStyle.css">
</head>

<body>
  <center><div>
    <h3>Manager Login</h3>  
  <form method="post" action=''>

<p>
  <label for="textfield">Name of Product:<br>
  </label>
  <input type="text" name="textfield" id="textfield" placeholder="Enter Name of Product"> 
</p>
<?php
if(isset($_POST['submit']))
{

  if(empty($productName)){

    echo $emptyName;
  }


}



?>
<p>
  <label for="textfield2">Quantity:<br>
  </label>
  <input type="text" name="textfield2" id="textfield2" placeholder="Enter Quantity">
</p>

<?php
if(isset($_POST['submit']))
{

  if(empty($quantity)){

    echo $emptyQuantity;
  }


}



?>

<p>
  <label for="textfield3">Catagory:<br>
  </label>
  <input type="text" name="textfield3" id="textfield3" placeholder="Enter Catagory">
</p>
<?php
if(isset($_POST['submit']))
{

  if(empty($catagory)){

    echo $emptyCatagory;
  }


}



?>
<p>
  <label for="textfield6">Price (per Unit):<br>
  </label>
  <input type="text" name="textfield6" id="textfield6" placeholder="Enter Price">
</p>
<?php
if(isset($_POST['submit']))
{

  if(empty($productPrice)){

    echo $emptyPrice;
  }


}



?>
<p>
  <label for="textfield4">Company Name:<br>
  </label>
  <input type="text" name="textfield4" id="textfield4" placeholder="Enter Company Name">
</p>
<?php
if(isset($_POST['submit']))
{

  if(empty($companyName)){

    echo $emptyComName;
  }


}



?>

<p>
  <input type="submit" name="submit" id="submit" value="Add Product">
</p>
<?php
if(isset($_POST['submit']))
{

 if( !empty($productName) && !empty($quantity) && !empty($catagory) && !empty($companyName) && !empty($addedBy) && !empty($productPrice)){

    echo $successEntry;
  }


}



?>
</form></div>
</center>
</body>
</html>

