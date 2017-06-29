<?php



require_once 'islogin.php';
require_once '../Plus/DbMySQL.PHP';


$db= new DbMysql();

$id=@$_POST["id"];

if(count($id)==0)
{
    echo "<script>alert('Please choose you want delete!');location.href='assess.php'</script>";
    exit();
}

foreach($id as $v)
{
    $sql="delete from assess where id =$v";
    $db->sql($sql);
    if($db->affected()!=1)
    {
        echo "<script>alert('Deleting $v have a error');location.href='assess.php'</script>";
    }
    
}

echo "<script>alert('Batch Remove Success');location.href='assess.php'</script>";

?>
