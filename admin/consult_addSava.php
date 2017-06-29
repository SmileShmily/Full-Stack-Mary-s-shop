<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$db = new DbMysql();


$pid=$_POST["pid"];
$typeid=$_POST["typeid"];
$issh=$_POST["issh"];
$ishf=$_POST["ishf"];
$content=$_POST["content"];
$recontent=$_POST["recontent"];
$usernameshow=$_POST["usernameshow"];
$addtime=time();
$inputer=$_SESSION["username"];
$ip="admin";


$db->sql("select * from product where id=$pid");
if($db->affected()!=1)
{
    echo "<script>alert('Have no ProductID, please check ProductId and try again!');location.href='consult.php'</script>";
    exit();
    
}
 
if($recontent=="")
{
    $ishf=0;
   
}

$sql="
   insert into consult(pid,typeid,issh,ishf,content,recontent,usernameshow,addtime,inputer,ip)  
values('$pid','$typeid','$issh','$ishf','$content','$recontent','$usernameshow','$addtime','$inputer','$ip')   
";


$isok=$db->sql($sql);

if($isok==1)
{
    echo "<script>alert('Add consult information successfully');location.href='consult.php';</script>";
}
else
{
    echo "<script>alert('Add consult information failed');location.href='consult.php';</script>";
}

?>
