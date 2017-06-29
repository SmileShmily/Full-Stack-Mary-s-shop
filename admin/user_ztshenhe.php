<?php



require_once 'islogin.php';
require_once '../Plus/DbMysql.php';

$db = new DbMysql();

//如何的判断 现在要执行什么状态的更新

 
$zt=$_POST["zt"];
 
$id=@$_POST["id"];

if(count($id)==0)
    {
       echo "<script>alert('Have no choice to change information, please make a selection');location.href='user.php'</script>";
    
         exit();       
    }

foreach($id as $v)
{
    $sql="update user set zt='$zt' where id=$v";
    $isok=$db->sql($sql);
     if($isok!=1)
     {
         echo "<script>alert('Modify the error');location.href='user.php'</script>";
     }
}

echo "<script>alert('Batch change state of success');location.href='user.php';</script>";
?>
