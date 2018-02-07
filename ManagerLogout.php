<?php
if(!isset($_SESSION['username']))
{

header("Location:http://localhost/online%20Dairy/Manager/ManagerLogin.php");



}
session_start();
session_destroy();
header("refresh:1,url='ManagerLogin.php'");


?>