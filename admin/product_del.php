<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=$_GET["id"];

$del = new DbMysql();

$isok=$del->sql("delete from product where id =$id");

if($isok==1)
{
    echo "<script>alert('Deleted successfully');location.href='product.php'</script>";
}
else
{
    echo "<script>alert('Deleted Failed');location.href='product.php';</script>";
}

?>
