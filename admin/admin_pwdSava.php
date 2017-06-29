<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$username=$_POST["username"];
$password=$_POST["password"];


$edit = new DbMysql();

$edit->sql("update admin set password='$password' where username='$username'");

session_destroy();

echo "<script>alert('change success,please login again');top.location.href='login.php';</script>";



?>
