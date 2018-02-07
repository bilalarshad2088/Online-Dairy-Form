<!DOCTYPE html>
<html>
<head>

</head>

<body>
<?php
include_once('DatabaseConnection.php');
include_once('AdminDashboard.php');



if(isset($_POST['add_man'])){

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
$checkUsername=mysqli_query($con,"select username from manager where username='$username'");
$result=mysqli_fetch_array($checkUsername);
if($result>0)
{

  $usernameErrur= "Choose Another Username!!".'<br>';
}

if(!empty($fName) && !empty($lName) && !empty($salary) &&  !empty($_POST['position']) && !empty($_POST['gender'] && $result<1)&& !empty($username) && !empty($password)) {
  
  $position=$_POST['position'];

$gender=$_POST['gender'];
$data=mysqli_query
($con,"INSERT INTO Manager( fname, lname,username,password, dob, salary, email, position, gender) VALUES ('$fName','$lName','$username','$password','$DOB','$salary','$email','$position','$gender')");

$enterySucceed= "Successfully Entered the information of new Manager";
}




}




?>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Manager Information</title>
<link rel="stylesheet" type="text/css" href="AddManagerStyle.css">
</head>

<body>


<div>
  <h3>Add Manager Information</h3>
  <form method="post" action="AddManagerForm.php" align="center" border="5px">
    
<p>
  <label for="textfield">First Name<br>
  </label>
  <input type="text" name="fname" id="textfield">
  <?php 
  
  if (isset($_POST['add_man'])){
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
  
  if (isset($_POST['add_man'])){
    if(empty($lName))
echo  '<br>'.$missLname; }

?>


<p>
  <label for="username">User Name<br>
  </label>
  <input type="text" name="username" id="username">

  <?php 
  
  if (isset($_POST['add_man'])){
    if(empty($username))
echo  '<br>'.$missUsername; }
 if (isset($_POST['add_man'])){
    if($result>0)
echo  '<br>'.$usernameErrur; }

?>

<p>
  <label for="password">Password<br>
  </label>
  <input type="password" name="password" id="password">

  <?php 
  
  if (isset($_POST['add_man'])){
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
  if (isset($_POST['add_man'])){  
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
  <input type="radio" name="position" id="radio3" value="Manager">Manager
 
 


  <?php 
  
  if (isset($_POST['add_man'])){
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
  
  if (isset($_POST['add_man'])){
    if(empty($_POST['gender']))
echo  '<br>'.$missGender; 
}
?>
</p>
<p>
  <input type="submit" name="add_man" id="loginButton" value="Sumbit">
</p>

</form>
</div>
<?php
 if (isset($_POST['add_man'])){
    if(!empty($fName) && !empty($lName) && !empty($salary) &&  !empty($_POST['position']) && !empty($_POST['gender'] && !empty($username) && !empty($password) && $result<1))
echo  '<br>'.$enterySucceed; 
}
?>
<center><a href="ManagerList.php" >View List Of Managers</a></center>
</body>
</html>




