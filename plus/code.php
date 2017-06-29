<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$img=  imagecreate(50, 30);//创建
$b=  imagecolorallocate($image,0, 0, 0);//背景颜色
$f=  imagecolorallocate($image, 255, 255, 255);//文本颜色
$str="1234567890";
$s='';
for ($i=0;$i=4;$i++)
{
    $k=  mt_rand(1, strlen($str));
    $s.=$str[$k-1];
}
session_start();
$_SESSION["code"]=$s;


imagefill($img,0,0,$b);
imagestring($image, 5, 5, 3, $s, $f);
header("content-type:image/png");
imagepng($image);
?>