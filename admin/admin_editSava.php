<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';
// ͨ��ID��ȡ�����ݿ���Ϣ��Ȼ����ύ�����ı����жԱ�

$id=$_GET["id"];
$username=$_POST["username"];
$password=$_POST["password"];
$rights=$_POST["rights"];

$edit = new DbMysql();
$edit->sql("update admin set username='$username',password='$password',rights='$rights' where id=$id");
$isok=$edit->affected();

if($isok==1)
{
    echo "<Script>alert('admin information edit success');location.href='admin.php'</script>";
}
else
{
    echo "<Script>alert('admin information edit false');location.href='admin.php'</script>";
}

?>
