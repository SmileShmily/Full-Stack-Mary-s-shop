<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/maig.class.php';

$maig= new maig();
$sava= new DbMysql();

$id=$_GET["id"];

$result=$sava->select("select * from product where id=$id",1);

$picurlArray=array_filter(explode("#",$result["picurls"]));
$piccount=count($picurlArray);

$newpicurls='';
foreach($picurlArray as $key=>$v)
{
    $picinfo=explode("@",$v);
    
    if(isset($_POST["editimginfo".$key]))
    {
        $newpicurls.=$_POST["editimginfo".$key]."@";
        $newpicurls.=$picinfo["1"];
        $newpicurls.="#";
           //echo "有这个INPUT 表示图片没有删除";
           //echo "<hr>"; 
    }
    else
    {
           //echo "unlink $picinfo[1]";
          // echo $v;
          // echo "没有这个input表示图片被删除了";
          // echo "<hr>"; 
    }

}

$picurls="";
foreach($_SESSION["urlfile_info"] as $row=>$v)
{
     
    
    $picurls.=$_POST["picinfook".$row]."@".$v;
    $picurls.="#";
     
}

//echo $result["picurls"];

//echo $newpicurls;
//echo $picurls;


//for($i=0;$i<$piccount;$i++)
//{
//    echo $_POST["editimginfo".$i];
//    echo "<br>";
//}

//var_dump($_POST);



 
$title=$maig->str($_POST["title"]);
$numbers=$_POST["numbers"];
$typeid=$_POST["typeid"];
$hot=empty($_POST["hot"])?0:$_POST["hot"];
$drops=empty($_POST["drop"])?0:$_POST["drop"];
$recommend=empty($_POST["recommend"])?0:$_POST["recommend"];
$kucun=$_POST["kucun"];
$hits=$_POST["hits"];
$picurl=$_POST["picurl"];
$content=$_POST["content"];
$ppid=$_POST["ppid"];
$yprice=$_POST["yprice"];
$price=$_POST["price"];

//echo $title;
//echo "<hr>";
//echo $numbers;
//echo "<hr>";
//echo $typeid;
//echo "<hr>";
//echo $hot;
//echo "<hr>";
//echo $drops;
//echo "<hr>";
//echo $recommend;
//echo "<hr>";
//echo $kucun;
//echo "<hr>";
//echo $hits;
//echo "<hr>";
//echo $picurl;
//echo "<hr>";
//echo $content;
//
$isok=$sava->sql("
update product set
title='$title',
numbers='$numbers',
typeid='$typeid',
ppid='$ppid',
hot='$hot',
drops='$drops',
recommend='$recommend',
kucun='$kucun',
hits='$hits',
picurl='$picurl',
content='$content',
picurls='$newpicurls$picurls',
yprice='$yprice',
price='$price'         
        where id=$id
");
//echo "<hr>";
//echo $isok;


if($isok==1)
{
    echo "<script>alert('edit success');location.href='product.php'</script>";
}
else
{
    echo "<script>alert('edit failed');location.href='product.php';</script>";
}

?>
