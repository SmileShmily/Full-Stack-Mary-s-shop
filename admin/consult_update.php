<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$db = new DbMysql();
$id=@$_POST["id"];

if(count($id)==0)
{
    echo "<script>alert('Please choose update information');location.href='consult.php';</script>";
    exit();
}

$infozt=$_POST["infozt"];
$ziduan=$_POST["ziduan"];

foreach($id as $v)
{
    $sql="update consult set $ziduan='$infozt' where id=$v";
    $isok=$db->sql($sql);
    if($isok!=1)
    {
        echo "<script>alert('error');location.href='consult.php'</script>";
        exit();
    }
}

echo "<script>alert('All change success');location.href='consult.php';</script>";

 


?>
