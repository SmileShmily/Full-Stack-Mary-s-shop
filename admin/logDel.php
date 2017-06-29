<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';



$id = $_GET["id"];

$logDel = new DbMysql();
$logDel->sql("delete from adminLog where id=$id");
$result=$logDel->affected();

if($result==1)
    {
    echo "<script>alert('delete success');location.href='log.php';</script>";
    }
    else
    {
    echo "<script>alert('delete failed');location.href='log.php'</script>";
    }

?>
