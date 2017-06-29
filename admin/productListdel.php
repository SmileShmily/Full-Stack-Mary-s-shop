<?php


require_once 'islogin.php';
require_once '../plus/DbMySQL.PHP';
require_once '../plus/ProductType.class.php';

$id=$_GET["id"];

$del= new ProductType();

$del->typeDel($id);

echo "<script>alert('delete success');location.href='productList.php';</script>";


//echo "得到一个ID，然后删除这个ID";
//echo $id;


?>
