<?php
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Admin/AdminLogin.php");



}
session_start();
session_destroy();
header("refresh:1,url='AdminLogin.php'");


?>