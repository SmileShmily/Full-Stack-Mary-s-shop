<?php


require '../public/init.php';


$title="Modified data";
$info="Modify data successfully";
$url="user_edit.php";

$xingming=$_POST["xingming"];
$sex=$_POST["sex"];
$mobile=$_POST["mobile"];


$sql="update user set xingming='$xingming',sex='$sex',mobile='$mobile' where username='".UID."'";
$isok=$db->sql($sql);

if($isok){
    $info="Edit the success";
}else{
    $info="Edit the failed";
}


include "user_SavaOK.php";


?>
