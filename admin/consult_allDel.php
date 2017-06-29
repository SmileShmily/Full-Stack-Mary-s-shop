<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id= @$_POST["id"];

if(count($id)==0)
{
    echo "<script>alert('Select the information of operate');location.href='consult.php'</script>";
    exit;
}


$db=new DbMysql();

foreach($id as $v)
{
    $db->sql("select * from consult where id =$v");
    if($db->affected()!=1)
    {
        echo "<Script>alert('Parameter error');location.href='consult.php';</script>";
    }
    
    $sql="delete from consult where id =$v";
    $isok=$db->sql($sql);
    if($isok!=1)
    {
        echo "<script>alert(' unknown error');location.href='consult.php';</script>";
    }       
    
}

echo "<script>alert('All delete successful');location.href='consult.php'</script>";

?>
