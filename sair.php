<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['user-role']);
header('location:login.php');
 ?>