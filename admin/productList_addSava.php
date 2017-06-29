<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$tid=$_POST["tid"];
$idpath=$_POST["tid"];
$typename=$_POST["typename"];
$sd=1; //默认深度是1
$db = new DbMysql();
if($tid!=0)
{
    
    $result=$db->select("select * from productList where id=$tid", 1);
    $sd=$result["sd"]+1;
    $idpath=$result["idpath"]."_".$result["id"];
   // echo "表示不是一级分类，需要获得上级分类的深度+1";
   
}


 

//echo "上级ID：$tid";
//echo "<br>";
//echo "分类名称：$typename";


          
$isok=$db->sql("insert into productList(tid,typename,sd,idpath) values('$tid','$typename','$sd','$idpath')");

if($isok==1)
{
    echo "<script>alert('ProductType create success');location.href='productList.php';</script>";
}
else
{
    echo "<script>alert('ProductType create  failed');location.href='productList.php';</script>";
}
?>
