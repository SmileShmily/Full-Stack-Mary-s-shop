<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$db= new DbMysql();
$id=@$_POST["id"];

if(count($id)==0)
{
    echo "<script>alert('Please choose to delete information');location.href='feedbackType.php'</script>";
    exit();
}

foreach ($id as $v)
{
    $sql="delete from feedbackType where id=$v";
    
     $db->sql($sql);
     
     if($db->affected()!=1)
     {
         echo "<Script>alert('Batch delete failed,ID:$v');location.href='feedbackType.php';</script>";
         exit();
     }
}

echo "<script>alert('Batch delete success');location.href='feedbackType.php'</script>";



?>
