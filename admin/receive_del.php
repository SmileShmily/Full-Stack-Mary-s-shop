<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=$_GET["id"];

$del = new DbMysql();

$isok=$del->sql("delete from receive where id =$id");

if($isok==1)
{
    echo "<script>alert('Deleted successfully');location.href='receive.php'</script>";
    exit();
}
else
{
    echo "<script>alert('Deleted Failed');location.href='receive.php';</script>";
    exit();
}

?>