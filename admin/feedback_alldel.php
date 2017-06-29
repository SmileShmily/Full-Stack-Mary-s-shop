<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];

if(count($id)==0)
{
    echo "<Script>alert('Select the information you want to delete');location.href='feedback.php'</script>";
    exit();
}

$db= new DbMysql();
foreach($id as $v)
{
    $sql="delete from feedback where id =$v";
    $db->sql($sql);
    if($db->affected()!=1)
    {
        echo "<script>alert('Delete information interruptID:$v');location.href='feedback.php'</script>";
        exit();
    }
}

echo "<script>alert('Batch information was removed successfully');location.href='feedback.php';</script>";
?>
