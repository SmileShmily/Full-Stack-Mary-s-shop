<?php

require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id=$_GET["id"];

$del= new DbMysql();
$del->sql("delete from articleType where id=$id ");
$isok=$del->affected();

if($isok==1)
{
    echo "<script>alert('DeleteClassSuccess');location.href='articleList.php'</script>";
}
else
{
    echo "<script>alert('DeleteClassFailed');location.href='articleList.php'</script>";
}

?>
