<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$edit = new DbMysql();

$id=$_GET["id"];

$webname=$_POST["webname"];
$weburl=$_POST["weburl"];
$styleid=$_POST["styleid"];
$intro=$_POST["intro"];
$fifel=$_FILES["logourl"];


if($fifel["name"]!="")
{
    $ftype=$fifel["type"];
    $fsize=$fifel["size"];
    if(($ftype=="image/gif"||$ftype=="image/jpeg"||$ftype=="image/pjpeg") && $fsize<102400)
   {   
    
   }
   else
    {
    echo "<script>alert('LOGO file  outside the law');location.href='links.php'</script>";
    exit;
   }
   
   
    move_uploaded_file($fifel["tmp_name"], "../upload/".$fifel["name"]);
    $logourl="upload/".$fifel["name"];
    $isok=$edit->sql("update links set logourl='$logourl' where id =$id");
    if($isok==1)
    {
       
    }
    else
    {
        echo "<script>alert('Edit failed');location.href='links_edit.php?id=$id';</script>";
        exit;
    }
     
    
}
 

 

$isok=$edit->sql("update links set webname='$webname',weburl='$weburl',styleid='$styleid',intro='$intro' where id =$id");

//echo $webname;
//echo $weburl;
//echo $styleid;
//echo $intro;
//echo $fifel;
//echo $id;
 
if($isok==1)
{
    echo "<script>alert('Edit success');location.href='links.php';</script>";
}
else
{
    echo "<script>alert('Edit failed');location.href='links_edit.php?id=$id';</script>";
}

?>
