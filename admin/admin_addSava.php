<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';




$username=$_POST["username"];
$password=$_POST["password"];
$rights=$_POST["rights"];
//echo $username.$password.$rights;

$admin= new DbMysql();
$admin->sql("select * from admin where username='$username'");


$count=$admin->affected();

if($count>0)
{
    echo "<script>alert('your account$username,already have,please change another one');location.href='admin.php'</script>";   
    exit;
}

$admin->sql("insert into admin(username,password,rights) values('$username','$password','$rights')");
$isok=$admin->affected();
if($isok==1)
    {
     echo "<script>alert('admin create success');location.href='admin.php'</script>";
    }
    else
    {
     echo "<script>alert('admin create faile');location.href='admin.php'</script>";
    }
?>
