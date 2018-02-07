

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


$query = "select * from addProduct where managerId='$myID'";

$result = mysqli_query($con,$query)
or die('Error querying database');

$count=mysqli_num_rows($result);
?>
<form name="form1" method="post" action="YourProducts.php">
<table id="table1">
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
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>



</tr><tr>

</tr>
<tr>

<td align="center" bgcolor="#FFFFFF"><strong>Product ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Product Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Quantity</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Price(per unit)</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Total Price</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Catagory</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Company Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Added By (Manager Name)</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Delete Information</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Update Information</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>View Product Detail</strong></td>
</tr>

<?php

while ($row=mysqli_fetch_array($result)) {



?>

<tr>

<td bgcolor="#FFFFFF"><?php echo $row['productId']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['productName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['quantity']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['price']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['price']*$row['quantity']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['catagory']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['companyName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['managerId'];  ?></td>

<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" value="<?php echo $row['productId']; ?>"></td>

<td align="center" bgcolor="#FFFFFF"><a href="UpdateProductInfo.php?productId= <?php echo $row['productId'] ?>" id="newA">update</a></td>
<td align="center" bgcolor="#FFFFFF"><a href="ProductDetail.php?detail= <?php echo $row['productId'] ?>" id="newA">Product Detail</a></td>
</td></td></td>
</tr>

<?php
}
}
?>



<tr>
<td ><input name="delete" type="submit" value="Delete"  id="DeleteButton"></td>
<td id="h5"><strong><a href="ManagerPortal.php" id="newA"> Back</a></strong></td> 
</tr>





<?php



if(isset($_POST['delete']))
{
  if(empty($_POST['checkbox'])){
    $delErrr= "Please Select to Delete";
  }
  else{
    $checkbox = $_POST['checkbox'];
for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];

echo $del_id;
$sql = "DELETE FROM addProduct WHERE productId='$del_id'";
$result = mysqli_query($con,$sql);
}
if($result){
$delMessage= "<strong>"."Product Deleted"."</strong>";

}
}

 
}


?>

</table>
</form>
</td>
</tr>
</table>
<?php
if (isset($_POST['delete'])){
    if(!empty($_POST['checkbox']))
  echo '<p id="erorr">'.$delMessage.'</p>';
     if(empty($_POST['checkbox']))
    echo '<p id="erorr">'.$delErrr.'</p>';
}


?>
</body>

</html>

