<?php

require "../public/init.php";



if(!ISLOGIN)
{
    echo "nologin";
    exit;
}
$cart = new cart();

$id=$_POST["id"];
$sum=$_POST["sum"];


$sql="select * from product where id='$id'";
$result=$db->select($sql,1);

if(empty($result))
{
   echo 0;
   exit;
}

if($sum>$result["kucun"])
    {
      echo 2;
      exit;
    }
 
        
        
if($cart->addCart($id,$sum)){
    echo 1;
}
 

?>
