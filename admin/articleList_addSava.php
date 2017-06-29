<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$typename=$_POST["typename"];
$leixing=$_POST["leixing"];
$add = new DbMysql();
$add->sql("insert into articleType(typename,leixing) values('$typename','$leixing')");

$isok=$add->affected();

if($isok==1)
{
    echo "<script>alert('CreateSuccess');location.href='articleList.php';</script>";
}
else
{
    echo "<script>alert('CreateFailed');location.href='articleList.php';</script>";
}

?>

