<?php


require "../public/init.php";

//var_dump($_POST);

$action=$_REQUEST["action"];
$favorites = new favorites();
 
$title="favorites";
$info="";
$url="user_favorites.php";
switch ($action) {
    case "del":
        $id=$_GET["id"];
        if($favorites->favoritesDel($id)){
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
