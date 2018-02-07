<?php
include('DatabaseConnection.php');
session_start();
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Admin/AdminLogin.php");



}session_start();
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Admin/AdminLogin.php");



}

if(isset($_GET['update'])){
$emp_id=$_GET['update'];

$result=mysqli_query($con,"select *from manager where id='$emp_id' ");


while($row=mysqli_fetch_array($result)){

echo "<!DOCTYPE html>
<html>
<head>
	<title> $row[fname] $row[lname]</title>
</head>
<h1> $row[fname] $row[lname]'s Profile  </h1>
<body>
<form method ='post' action='managerList.php' >
 <input type='hidden' value='$row[id]' name='id'> <br> 
<font size='6'>First Name:  &nbsp <input type = 'text' value = '$row[fname]' name = 'fname' height='6px' ></font> <br> 
<font size='6'>Last Name: &nbsp  <input type = 'text' value = '$row[lname] ' name= 'lname' height='6px' ></font>  <br>
<font size='6'>User Name: &nbsp  <input type = 'text' value = '$row[username] ' name= 'username' height='6px' ></font>  <br>
<font size='6'>Password: &nbsp  <input type = 'text' value = '$row[password] ' name= 'password' height='6px' ></font>  <br>
<font size='6'>Date of Birth:  &nbsp <input type = 'text' value ='$row[dob]' name = 'dob' height='6px' ></font> <br> 
<font size='6'>Salary: &nbsp <input type = 'text' value = '$row[salary]' name = 'salary' height='6px' ></font>  <br> 
 
<font size='6'>email:  &nbsp <input type = 'text' value ='$row[email]' name = 'email' height='6px' ></font>  <br> 
<font size='6'>Position: &nbsp <input type = 'text' value = '$row[position]' name = 'position' height='6px' ></font><br> 
<font size='6'>Gender: &nbsp <input type = 'text' value = '$row[gender]' name = 'gender' height='6px' ></font>  <br> 
<input type ='submit' value='Update' name='update2'> 
  </form>
</body>
</html>";



}
}


?>

