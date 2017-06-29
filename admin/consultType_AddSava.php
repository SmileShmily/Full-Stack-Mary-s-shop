<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$typename=$_POST["typename"];
$typeorder=$_POST["typeorder"];
$typezt=$_POST["typezt"];



$db = new DbMysql();

$db->sql("select * from consultType where typename='$typename'");
if($db->affected()>0)
{
    echo "<script>alert('TypeID is the same, please check');location.href='consultType.php'</script>";
    exit;
}

$sql="insert into consultType(typename,typeorder,typezt)
values('$typename','$typeorder','$typezt')    
";

$isok=$db->sql($sql);
if($isok==1)
{
    echo "<script>alert('Create ConsultType success');location.href='consultType.php'</script>";
}
else
{
    echo "<script>alert('Create ConsultType failed');location.href='consultType.php'</script>";
}
?>
