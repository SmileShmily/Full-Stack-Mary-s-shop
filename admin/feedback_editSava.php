<?php


require_once 'islogin.php';
require_once '../plus/DbMySQL.PHP';

$db = new DbMysql();

$id=$_POST["id"];
if($id=="")
{
    echo "<script>alert('Please specify the informationID');location.href='feedback.php'</script>";
    exit();
}

$db->sql("select * from feedback where id =$id");
if($db->affected()!=1)
{
    echo "<script>alert('no informationID');location.href='feedback.php'</script>";
    exit();
}


$typeid=$_POST["typeid"];
$issh=$_POST["issh"];
$ishf=$_POST["ishf"];
$content=$_POST["content"];
$recontent=$_POST["recontent"];
$usernameshow=$_POST["usernameshow"];

if($typeid=="")
{
    echo "<script>alert('TypeID can not be empty');location.href='feedback.php'</script>";
    exit(); 
}

if($content=="")
{
    echo "<script>alert('Feedback cannot be empty');location.href='feedback.php'</script>";
    exit();
}

if($usernameshow=="")
{
        echo "<script>alert('Inputer can't be empty');location.href='feedback.php'</script>";
    exit();
}

$sql="update feedback set
   typeid='$typeid',
   issh='$issh',
   ishf='$ishf',
   content='$content',
   recontent='$recontent',
   usernameshow='$usernameshow'
   where id=$id
";

$isok = $db->sql($sql);
if($isok==1)
{
    echo "<Script>alert('feedback edit success');location.href='feedback.php';</script>";
}
else
{
    echo "<script>alert('feedback edit failed');location.href='feedback.php'</script>";
}

var_dump($_POST);
?>
