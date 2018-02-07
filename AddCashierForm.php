<!DOCTYPE html>
<html>
<head>

</head>

<body>
<?php
include_once('DatabaseConnection.php');
include_once('AdminDashboard.php');

if(isset($_POST['add_cash'])){

$fName=$_POST['fname'];
$lName=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$DOB=$_POST['dob'];
$salary=$_POST['salary'];
$email=$_POST['email'];

 if(empty($fName)){

$missFname="You Missed First Name".'<br>';


}
if(empty($lName)){
$missLname="You Missed Last Name"."<br>";
}
if(empty($username)){
$missUsername="You Missed Username"."<br>";
}if(empty($password)){
$missPassword="You Missed Password"."<br>";
}
if( empty($salary)){
$missSalary="You Missed Salary"."<br>";

}

if(empty($_POST['position'])){

$missPosition="You Missed to Select Position"."<br>";

}
if(empty($_POST['gender']))
{
$missGender="You Missed to Select Gender"."<br>";

}


if(!empty($fName) && !empty($lName) && !empty($salary) &&  !empty($_POST['position']) && !empty($_POST['gender'] )&& !empty($username) && !empty($password)) {
  
  $position=$_POST['position'];

$gender=$_POST['gender'];
$data=mysqli_query
($con,"INSERT INTO Cashier( fname, lname,username,password, dob, salary, email, position, gender) VALUES ('$fName','$lName','$username','$password','$DOB','$salary','$email','$position','$gender')");

$enterySucceed= "Successfully Entered the information of new Cashier";
}




}




?>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Cashier Information</title>
<link rel="stylesheet" type="text/css" href="AddCashierStyle.css">
</head>

<body>


<div>
  <h3>Add Cashier Information</h3>
  <form method="post" action="AddCashierForm.php" align="center" border="5px">
    
<p>
  <label for="textfield">First Name<br>
  </label>
  <input type="text" name="fname" id="textfield">
  <?php 
  
  if (isset($_POST['add_cash'])){
    if(empty($fName))
echo  '<br>'.$missFname; 

}
?>
</p>





<p>
  <label for="textfield2">Last Name<br>
  </label>
  <input type="text" name="lname" id="textfield2">

  <?php 
  
  if (isset($_POST['add_cash'])){
    if(empty($lName))
echo  '<br>'.$missLname; }

?>


<p>
  <label for="username">User Name<br>
  </label>
  <input type="text" name="username" id="username">

  <?php 
  
  if (isset($_POST['add_cash'])){
    if(empty($username))
echo  '<br>'.$missUsername; }

?>

<p>
  <label for="password">Password<br>
  </label>
  <input type="password" name="password" id="password">

  <?php 
  
  if (isset($_POST['add_cash'])){
    if(empty($password))
echo  '<br>'.$missPassword; }

?>

  <label for="textfield3"><br>
    <br>
    Date of Birth(optional)<br>
  </label>
  <input type="text" name="dob" id="textfield3">
</p>

<p>
  <label for="textfield4">Salary<br>
  </label>
  <input type="text" name="salary" id="textfield4">


  <?php 
  if (isset($_POST['add_cash'])){  
  if(empty($salary)) 
echo  '<br>'.$missSalary.'<br>';
}
 ?>


  <label for="textfield5"><br>
    <br>
    Email address(optional)<br>
  </label>
  <input type="text" name="email" id="textfield5">
</p>
<p>
<label>Position</label><br>
</p>
<p>
  <input type="radio" name="position" id="radio3" value="Cashier">
  Cashier
 


  <?php 
  
  if (isset($_POST['add_cash'])){
    if(empty($_POST['position'])){
echo  '<br>'.$missPosition; 
}
}

?>

</p>


<p>
<label>Gender</label><br>
</p>
<p>
  <input type="radio" name="gender" id="radio" value="Male">
  Male
  <input type="radio" name="gender" id="radio2" value="Female">
Female
<?php 
  
  if (isset($_POST['add_cash'])){
    if(empty($_POST['gender']))
echo  '<br>'.$missGender; 
}
?>
</p>
<p>
  <input type="submit" name="add_cash" id="loginButton" value="Sumbit">
</p>

</form>
</div>

<?php
 if (isset($_POST['add_cash'])){
    if(!empty($fName) && !empty($lName) && !empty($salary) &&  !empty($_POST['position']) && !empty($_POST['gender'] && !empty($username) && !empty($password)))
echo  '<br>'.$enterySucceed; 
}
?>
<center><a href="CashierList.php" >View List Of Cashiers</a></center>
</body>
</html>




