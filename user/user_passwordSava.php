<?php


require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

$ymima=md5($_POST["yPassword"]);
$xmima=md5($_POST["xPassword"]);
$qmima=md5($_POST["qPassword"]);

$sql="select * from user where username ='".UID."' and password='$ymima'";
$db->sql($sql);


 
if($db->affected()!=1){
    webAlter("original password mistake", 'user_password.php');
}

if($xmima!=$qmima){
    webAlter(" two passwords don't match", 'user_password.php');
}

$sql="update user set password='$xmima' where username ='".UID."'";
$isok=$db->sql($sql);

if($isok)
    {
    session_destroy();
    $_SESSION=array();
        webAlter("Your password is changed, please login again!", 'user_login.php');
    }else{
       webAlter("Modify the failure", 'user_password.php'); 
    }


?>
