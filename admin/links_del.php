<?php
 require_once 'islogin.php';
 require_once '../plus/DbMysql.php';
 $id=$_GET["id"];
 
 $del = new DbMysql();
 $isok=$del->sql("delete from links where id=$id");
 if($isok==1)
 {
     echo "<script>alert('Delete success');location.href='links.php'</script>";
 }
 else
 {
     echo "<script>alert('Delete failed');location.href='links.php'</script>";
 }
 
?>
