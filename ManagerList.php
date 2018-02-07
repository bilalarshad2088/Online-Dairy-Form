<?php 
include_once('AdminDashboard.php');


if(isset($_POST['update2'])){
include('DatabaseConnection.php');

	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	$salary=$_POST['salary'];
	$email=$_POST['email'];
	$position=$_POST['position'];
	$gender=$_POST['gender'];

      mysqli_query($con,"update manager set  fname='$fname', lname='$lname', username='$username',password=
      	'$password' ,dob='$dob' , salary=
      	'$salary', email='$email', position='$position', gender='$gender' where id='$id' ");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View managers List</title>
	<link rel="stylesheet" type="text/css" href="ProductViewStyle.css">
</head>

<body>


<?php
include_once('DatabaseConnection.php');
$query = "select * from manager ORDER BY id";

$result = mysqli_query($con,$query)
or die('Error querying database');

$count=mysqli_num_rows($result);
?>

<form name="form1" method="post" action="">
<table id="table1">
<tr>
<td id="h4"><strong> Manager List</strong></td>
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
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>
<td id="h4"><strong></strong></td>

</tr>
<tr>

<td align="center" bgcolor="#FFFFFF"><strong>manager ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>First Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Last Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>User Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Password</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Date of Birth</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Salary</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Position</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Gender</strong></td>
<td align="center" bgcolor="#FFFFFF">Delete Information</td>
<td align="center" bgcolor="#FFFFFF">Update Information</td>
<td align="center" bgcolor="#FFFFFF">View Profile</td>
</tr>

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>

<td bgcolor="#FFFFFF"><?php echo $row['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['fname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['lname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['username']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['password']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['dob']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['salary']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['email']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['position']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['gender']; ?></td>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" value="<?php echo $row['id']; ?>"></td>

<td align="center" bgcolor="#FFFFFF"><a href="UpdatemanagerInfo.php?update= <?php echo $row['id'] ?>" id="newA">update</a></td>
<td align="center" bgcolor="#FFFFFF"><a href="ViewManagerProfile.php?view= <?php echo $row['id'] ?>" id="newA">Profile</a></td>
</td></td></td>
</tr>

<?php
}

?>







<tr>
<td ><input name="delete" type="submit" value="Delete" id="loginButtton"></td>
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

$sql = "DELETE FROM manager WHERE id='$del_id'";
$result = mysqli_query($con,$sql);
}
if($result){
$delMessage= "<strong>"."manager Deleted"."</strong>";

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

