<?php



require_once '../plus/DbMysql.php';
require_once '../plus/AdminLogin.class.php';

session_start();
$username= $_POST["username"];
$password=$_POST["password"];
$code=$_POST["code"];

if($code!=$_SESSION["code"])
{
    echo "<script>alert('wrong code,please do again');location.href='login.php';</script>";
    exit;
}

$login = new AdminLogin();
$islogin= $login->isLogin($username, $password);


if($islogin==1)
    {
      $_SESSION["username"]=$username;
      $_SESSION["password"]=$password;  
      echo "<script>alert('welcome $username');location.href='index.php';</script>";
    }
    
if($islogin==-1)
{
    echo "<script>alert('wrong password');location.href='login.php';</script>";
}

if($islogin==-2)
{
    echo "<script>alert('wrong user name,please enter right user name');location.href='login.php';</script>";
    
}



?>
