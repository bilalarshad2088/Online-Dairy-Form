<?php 




?>

<!DOCTYPE html>
<html>
<head>
  <title>Stock</title>
  <link rel="stylesheet" type="text/css" href="ProductViewStyle.css">
</head>

<body>

<?php
include_once('DatabaseConnection.php');

include_once('ManagerPortal.php');

$query = "select * from addProduct ";

$result = mysqli_query($con,$query)
or die('Error querying database');

$count=mysqli_num_rows($result);
?>

<form name="form1" method="post" action="ViewProduct.php">


<table  id="table1">
<tr>
<td id="h4"><strong> Products Stock</strong></td>
<td id="h4"><strong> </strong></td>
<td id="h4"><strong> </strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>

</tr>
<tr>

<td align="center" bgcolor="#FFFFFF"><strong>Product ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Product Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Quantity</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Price(per unit)</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Total Price</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Catagory</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Company Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Added By (Manager ID)</strong></td>

<td align="center" bgcolor="#FFFFFF"><Strong>View Product Detail</Strong></td>
</tr>

<?php

while ($row=mysqli_fetch_array($result)) {
$man_id= $row['managerId'];

//echo $man_id;


?>

<tr>

<td bgcolor="#FFFFFF"><?php echo $row['productId']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['productName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['quantity']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['price']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['price']*$row['quantity']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['catagory']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['companyName']; ?></td>
<td bgcolor="#FFFFFF" ><?php echo $row['managerId'];  ?></td>


<td align="center" bgcolor="#FFFFFF" id="h5"><a href="ProductDetail.php?detail= <?php echo $row['productId'] ?>" id="newA">Product Detail</a></td>
</td></td></td>
</tr>

<?php
}



?>
<tr>
<td id="h5"><strong><a href="ManagerPortal.php" id="newA"> Back</a></strong></td>	
</tr>
</table>
</form>
</td>
</tr>

</table>
<?php
if (isset($_POST['delete'])){
    if(!empty($_POST['checkbox']))
  echo $delMessage;
     if(empty($_POST['checkbox']))
    echo $delErrr;
}


?>

</body>

</html>

