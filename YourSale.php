

<!DOCTYPE html>
<html>
<head>
  <title>View Products</title>
  <link rel="stylesheet" type="text/css" href="YourProductsStyle.css">
</head>

<body>


<?php
include_once('DatabaseConnection.php');
include_once('CashierPortal.php');
if(isset($_SESSION['username']))
{


$username=$_SESSION['username'];
$password=$_SESSION['password'];

$man_ID=mysqli_query($con,"select id from cashier where username='$username' and password='$password'");



$Name=mysqli_fetch_array($man_ID);

$myID=$Name['id'];


$query = "select * from salerecord where cashierId='$myID'";

$result = mysqli_query($con,$query)
or die('Error querying database');

$count=mysqli_num_rows($result);
?>
<form name="form1" method="post" action="YourSale.php">
<table id="table1">
<tr>
<td id="h4"><strong> Your Sales</strong></td>
<td id="h4"><strong> </strong></td>
<td id="h4"><strong> </strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>



</tr><tr>

</tr>
<tr>

<td align="center" bgcolor="#FFFFFF"><strong>Sale ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Product ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Product Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Quantity</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Price(per unit)</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Company Name</strong></td>

<td align="center" bgcolor="#FFFFFF"><strong>Total Price</strong></td>


<td align="center" bgcolor="#FFFFFF"><strong>Sold By (Cashier ID)</strong></td>

</tr>

<?php

while ($row=mysqli_fetch_array($result)) {



?>

<tr>

<td bgcolor="#FFFFFF"><?php echo $row['recordID']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['productId']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['productName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['quantity']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['price']; ?></td>

<td bgcolor="#FFFFFF"><?php echo $row['companyName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['totalBill']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['cashierId'];  ?></td>



</td>
</tr>

<?php
}
}
?>



<tr>

<td id="h5"><strong><a href="CashiernPortal.php" id="newA"> Back</a></strong></td> 
</tr>







</table>
</form>
</td>
</tr>
</table>

</body>

</html>

