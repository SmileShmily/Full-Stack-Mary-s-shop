<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$db = new DbMysql();

$typeid=$_POST["typeid"];
$issh=$_POST["issh"];
$ishf=$_POST["ishf"];
$content=$_POST["content"];
$recontent=$_POST["recontent"];
$usernameshow=$_POST["usernameshow"];

$addtime=  time();
$ip='admin';
$inputer=$_SESSION["username"];


if($typeid=="")
{
    echo "<script>alert('TypeID can't be empty');location.href='feedback.php';</script>";
    exit();
}

if($content=="")
{
    echo "<script>alert('Content cannot be empty');location.href='feedback.php'</script>";
    exit();
}

if($recontent=="")
{
    $ishf=0;
}


$sql="insert into feedback(typeid,issh,ishf,content,recontent,usernameshow,addtime,ip,inputer)
 values('$typeid','$issh','$ishf','$content','$recontent','$usernameshow','$addtime','$ip','$inputer')    
";

$db->sql($sql);

if($db->affected()==1)
{
    echo "<script>alert('Feedback added successfully');location.href='feedback.php'</script>";
}
else
{
    echo "<script>alert('Feedback added failed');location.href='feedback.php'</script>";
}

?>
