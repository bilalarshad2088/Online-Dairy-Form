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

$query = "select * from saleRecord ";

$result = mysqli_query($con,$query)
or die('Error querying database');

$count=mysqli_num_rows($result);
?>




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
<td align="center" bgcolor="#FFFFFF"><strong>Sale ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Product ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Product Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Quantity</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Price(per unit)</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Company Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Total Price</strong></td>


<td align="center" bgcolor="#FFFFFF"><strong>Sold By (Cashier ID)</strong></td>



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

<td bgcolor="#FFFFFF" ><?php echo $row['cashierId'];  ?></td>


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

