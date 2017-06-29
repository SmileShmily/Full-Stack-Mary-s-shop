<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$db = new DbMysql();

$id=$_POST["id"];
$pid=$_POST["pid"];
$typeid=$_POST["typeid"];
$ishf=$_POST["ishf"];
$issh=$_POST["issh"];
$content=$_POST["content"];
$recontent=$_POST["recontent"];
$usernameshow=$_POST["usernameshow"];


$db->sql("select * from consult where id=$id");
if($db->affected()!=1)
{
    echo "<script>alert('Need more Var');location.href='consult.php'</script>";
    exit;
}

if($recontent=="")
{
    $ishf=0;
}


$sql="update consult set
 pid='$pid',
 typeid='$typeid',
 ishf='$ishf',
 issh='$issh',
 content='$content',
 recontent='$recontent',
 usernameshow='$usernameshow'
 where id =$id
";


$isok=$db->sql($sql);

if($isok==1)
{
    echo "<script>alert('Consult edit success!');location.href='consult.php'</script>";
}
else
{
    echo "<script>alert('Consult edit failed!')；location.href='consult.php';</script>";
}


?>
