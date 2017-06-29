<?php


require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/maig.class.php';

$maig = new maig();
$add = new DbMysql();

 

$hot=empty($_POST["hot"])?0:$_POST["hot"];
$drop=empty ($_POST["drop"])?0:$_POST["drop"];
$recommend=empty($_POST["recommend"])?0:$_POST["recommend"];

$numbers=$_POST["numbers"];
$title=$maig->str($_POST["title"]);
$typeid=$_POST["typeid"];
$kucun=$_POST["kucun"];
$hits=$_POST["hits"];
$picurl=$_POST["picurl"];
$ppid=$_POST["ppid"];

$content=$_POST["content"];
$yprice=$_POST["yprice"];
$price=$_POST["price"];

$time=time();
$inputer=$_SESSION["username"];
$picurls="";
foreach($_SESSION["urlfile_info"] as $row=>$v)
{
     
    
    $picurls.=$_POST["picinfook".$row]."@".$v;
    $picurls.="#";
     
}

//echo $picurls;
 
 

 
$isok=$add->sql("insert into product(numbers,title,typeid,ppid,hot,drops,recommend,kucun,hits,picurl,picurls,content,addtime,inputer,yprice,price)
        values('$numbers','$title','$typeid','$ppid','$hot','$drop','$recommend','$kucun','$hits','$picurl','$picurls','$content','$time','$inputer','$yprice','$price')");

if($isok==1)
{
    echo "<script>alert('Insert success');location.href='product.php'</script>";
}
else
{
    echo "<script>alert('Insert failed');location.href='product.php'</script>";
}

?>
