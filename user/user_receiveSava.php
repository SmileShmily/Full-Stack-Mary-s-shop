<?php


require "../public/init.php";

//var_dump($_POST);

$action=$_REQUEST["action"];
$receive = new receive();
 
$title="Address";
$info="";
$url="user_receive.php";
switch ($action) {
    case "add":
        $infos=$_POST;        
        if($receive->receiveAdd($infos,$_SESSION["editOK"])){
             $info="Add address success";
        }else
        {
            $info="Add address failed";
        }
       
        break;
    case "edit":
         $infos=$_POST;    
        if($receive->receiveAdd($infos,$_SESSION["editOK"])){
             $info="Address change success";
        }else
        {
            $info="Address change failed";
        }
         
        break;
    case "del":
        $id=$_GET["id"];
        if($receive->receiveDel($id)){
            //webAlter('删除成功', '/');
            $info="Delete the success";
        }else
        {
            
            $info="Delete the failed";
        }
        break;
    default:
        break;
}
 $_SESSION["editOK"]="notok";
 include "user_savaOK.php";
?>
