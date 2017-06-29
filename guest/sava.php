<?php


require "../public/init.php";

var_dump($_POST);

$info=array_map("guolvStr", $_POST);

var_dump($info);

$addtime=time();
$ip=getIP();
$zt=0;
if($webguest=="N")
{
    $zt=1;
}
$sql="insert into feedback(content,usernameshow,inputer,addtime,qq,mobile,email,wangwang,ip,issh)
     values('{$info["content"]}','{$info["uname"]}','{$info["uname"]}','$addtime','{$info["qq"]}','{$info["phone"]}','{$info["email"]}','{$info["wangwang"]}','$ip','$zt')";

if($db->sql($sql)){
    webAlter("Feedback success", "{$webdir}guest/");
}else{
   webAlter("Feedback failed", "{$webdir}guest/");
}
?>
