<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';


$id=@$_GET["id"];

if($id=="")
{
    echo "<script>alert('Required parameter missingID');location.href='feedback.php';</script>";
    exit();
}

$db = new DbMysql();
$db->sql("select * from feedback where id=$id");

if($db->affected()!=1)
{
    echo "<script>alert('IDlose');location.href='feedback.php';</script>";
    exit();
}

$db->sql("delete from feedback where id =$id");

if($db->affected()==1)
{
    echo "<script>alert('Feedback deleted successfully');location.href='feedback.php'</script>";
}
else
{
    echo "<script>alert('Feedback deleted failed');location.href='feedback.php'</script>";
}



?>
