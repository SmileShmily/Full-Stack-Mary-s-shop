<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];

if(count($id)<1)
{
    echo "<script>alert('Please select a user information to delete');location.href='user.php';</script>";
    exit;
}

$del = new DbMysql();

foreach ($id as $v)
{
   $sql="delete from user where id=$v";
   $isok=$del->sql($sql);
   if($isok!=1)
   {
       echo "There is an error ID:$v";
       exit;
   }
}

echo "Batch delete success!!!!!";
?>
