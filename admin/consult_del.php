<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=$_GET["id"];


$db= new DbMysql();

$db->sql("select * from consult where id=$id");

if($db->affected()!=1)
{
    echo "<script>alert(' no need parameter');location.href='consult.php';</script>";
}

 
$sql="delete from consult where id=$id";

$isok=$db->sql($sql);

if($isok==1)
{
    echo "<script>alert('Pre-sale consulting information deleted successfully');location.href='consult.php'</script>";
}
else
{
    echo "<script>alert('Pre-sale consulting information deleted failed');location.href='consult.php';</script>";
}
?>
