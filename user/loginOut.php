<?php



require "../public/init.php";
session_destroy();
$_SESSION=array();

webAlter("LogOut success","$webdir");

?>
