<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=@$_POST["id"];
$db = new DbMysql();

if(count($id)==0)
{
    echo "<script>alert('Select the information to be modified');location.href='user.php'</script>";
    exit();
}

foreach($id as $v)
{
    $sql="update user set zt=1 where id=$v";
    $isok=$db->sql($sql);
    if($isok!=1)
    {
        echo "<script>alert('An error occurred');location.href='user.php'</script>";
    }

}


echo "<script>alert('Batch change information done');location.href='user.php';</script>";
?>
