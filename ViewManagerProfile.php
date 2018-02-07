<?php
session_start();
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Admin/AdminLogin.php");



}

include('DatabaseConnection.php');

if(isset($_GET['view'])){
$emp_id=$_GET['view'];

$result=mysqli_query($con,"select *from manager where id='$emp_id' ");


while($row=mysqli_fetch_array($result)){

echo "<!DOCTYPE html>
<html>
<head>
	<title> $row[fname] $row[lname]</title>
</head>
<h1> $row[fname] $row[lname]'s  Profile </h1>
<body>

<font size='6'>ID:  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp $row[id] </font><br> 
<font size='6'>First Name:  &nbsp  &nbsp  &nbsp   &nbsp $row[fname]</font> <br> 
<font size='6'>Last Name: &nbsp  &nbsp  &nbsp  &nbsp $row[lname] </font>  <br>
<font size='6'>User Name: &nbsp  &nbsp  &nbsp  &nbsp $row[username] </font>  <br>
<font size='6'>password: &nbsp &nbsp  &nbsp  &nbsp  &nbsp $row[password] </font>  <br>


<font size='6'>Date of Birth:  &nbsp   &nbsp $row[dob]</font> <br> 
<font size='6'>Salary: &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp  $row[salary]</font>  <br> 
 
<font size='6'>email:  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp $row[email]</font>  <br> 
<font size='6'>Position: &nbsp    &nbsp &nbsp  &nbsp &nbsp  &nbsp&nbsp $row[position]</font><br> 
<font size='6'>Gender: &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp&nbsp $row[gender]</font>  <br>
<a href='ManagerList.php'>Back</a>

</body>
</html>";



}
}


?>

