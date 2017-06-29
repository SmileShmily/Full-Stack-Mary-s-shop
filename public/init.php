<?php


session_start(); 
//ËÑË÷
$sk="jie xu";
$k=@$_GET["k"];
define("WEBDIR", dirname(dirname(__FILE__)));
$uid="";
$pwd="";
$islogin=false;
if(isset($_SESSION["webusername"])){
    $islogin=true;
    $uid=$_SESSION["webusername"];
    $pwd=$_SESSION["webpassword"];
}
define("ISLOGIN",$islogin);
define("UID",$uid);
define("PWD",$pwd);

 

require_once WEBDIR.'/config/config.php';
require_once WEBDIR.'/public/functions.php';
function __autoload($classname){
   
    if($classname=="DbMysql"){
     $file=WEBDIR."/plus/".$classname.".php";   
    }else{
    $file=WEBDIR."/plus/".$classname.".class.php";  
    } 
    include_once $file;
}


$db = new DbMysql();
$action = new action();
?>
