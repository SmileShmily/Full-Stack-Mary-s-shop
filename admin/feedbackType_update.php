<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];


if(count($id)==0)
{
    echo "<script>alert('Please choose to update the information');location.href='feedbackType.php';</script>";
    exit();
}

$db= new DbMysql();
$zt=$_POST["zt"];


if($zt!=1 && $zt!=0)
{
    echo "<script>alert('error');location.href='feedbackType.php';</script>";
    exit();
}

foreach($id as $v)
{
    $db->sql("select * from feedbackType where id=$v");
    if($db->affected()!=1)
    {
        echo "<script>alert('nonexistentID：$V');location.href='feedbackType.php';</script>";
        exit();
    }
    $sql="update feedbackType set typezt='$zt' where id=$v";
    $isok=$db->sql($sql);     
}

echo "<script>alert('Batch changes to complete');location.href='feedbackType.php';</script>";
 

?>
