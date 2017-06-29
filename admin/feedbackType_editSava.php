<?php


require_once 'islogin.php';
require_once '../Plus/DbMysql.php';
$db= new DbMysql();

//var_dump($_POST);




$id=$_POST["id"];
$typename=$_POST["typename"];
$typeorder=$_POST["typeorder"];
$typezt=$_POST["typezt"];


if($typename=="")
{
    echo "<script>alert('TypeID cannot be empty');location.href='feedbackType.php'</script>";
    exit();
}

$result=$db->select("select * from feedbackType where id=$id",1);
//echo $result["typename"];
//echo "数据库是否存在SQL：";




 if($db->affected()!=1)
 {
     echo "<script>alert('Donot have change ID, please check');location.href='feedbackType.php'</script>";
     exit();
      
 }

$db->sql("select * from feedbackType where typename='$typename' and not id=$id");

//echo "<hr>数据库中 $typename 是否重名";
if($db->affected()!=0)
{
    echo "<script>alert('TypeID is the same, please check again after operation');location.href='feedbackType.php'</script>";
    exit(); 
}

 
$sql="update feedBackType set
  typename='$typename',
  typeorder='$typeorder',
  typezt='$typezt' where id=$id
";


$isok=$db->sql($sql);


if($isok==1)
{
    echo "<script>alert('Change success');location.href='feedbackType.php'</script>";
}
else
{
    echo "<script>alert('Change failure');location.href='feedbackType.php';</script>";
}

//echo $sql;


?>
