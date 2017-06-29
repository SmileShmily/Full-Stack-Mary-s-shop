<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id=$_GET["id"];
$typename=$_POST["typename"];
$typeorder=$_POST["typeorder"];
$typezt=$_POST["typezt"];

$db = new DbMysql();

$db->sql("select * from consultType where typename='$typename' and not id=$id");

if($db->affected()>0)
{
    echo "<script>alert('Had the TypeID, please check');location.href='consultType.php';</script>";
    exit;
    
}

$sql="update consultType set
   typename='$typename',
   typeorder='$typeorder',
   typezt='$typezt'
 where id=$id
";
 
$isok= $db->sql($sql);

if($isok==1)
{
    echo "<script>alert('ConsultType changed success');location.href='consultType.php'</script>";
}
else
{
    echo "<script>alert('ConsultType changed failed');location.href='consultType.php'</script>";
}
?>
