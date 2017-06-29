<?php


require_once 'islogin.php';
require_once '../Plus/DbMysql.php';

$id=$_GET["id"];

$db= new DbMysql();

//var_dump($_POST);


$username=$_POST["username"];

$password=$_POST["password"];

$email=$_POST["email"];
$tiwen=$_POST["tiwen"];
$huida=$_POST["huida"];
$zt=$_POST["zt"];
$xingming=$_POST["xingming"];
$sex=$_POST["sex"];
$mobile=$_POST["mobile"];

if($password!="")
{
    
    $password=md5($password);
    $isok=$db->sql("update user set password='$password' where id =$id");
     if($isok==1)
     {
         //echo "";
     }
     else
     {
         echo "<script>alert('Modify the failure');location.href='user.php'</script>";
         exit;
     }
   
}


$sql="
update user set 
username='$username',
email='$email',
tiwen='$tiwen',
huida='$huida',
zt='$zt',
xingming='$xingming',
sex='$sex',
mobile='$mobile'
 where id=$id
";

$isok=$db->sql($sql);


if($isok==1)
{
    echo "<script>alert('Modify the success');location.href='user.php'</script>";
}
else
{
    echo "<script>alert('Modify the failed');location.href='user.php'</script>";
}
 

?>
