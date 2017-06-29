<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

 

$username=$_POST["username"];
$password=md5($_POST["password"]);
$email=$_POST["email"];
$tiwen=$_POST["tiwen"];
$huida=$_POST["huida"];
$zt=$_POST["zt"];
$xingming=$_POST["xingming"];
$sex=$_POST["sex"];
$mobile=$_POST["mobile"];

$db= new DbMysql();

$db->sql("select * from user where username='$username'");

if($db->affected()>=1)
    {
       echo "<script>alert('".$username."Already exists, please change the log in to your account');location.href='user_add.php'</script>";
    }

$sql="insert into user(username,password,email,tiwen,huida,zt,xingming,sex,mobile)
values('$username','$password','$email','$tiwen','$huida','$zt','$xingming','$sex','$mobile')    
";
$isok=$db->sql($sql);

if($isok==1)
{
    echo "<script>alert('Add a user successfully');location.href='user.php'</script>";
}
else
{
     echo "<script>alert('Add a user failed');location.href='user.php'</script>";
}

 

?>
