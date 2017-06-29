<?php



require_once 'islogin.php';
require_once '../plus/DbMysql.php';

//var_dump($_POST);
//exit();
$id=@$_POST["id"];
$ziduan=@$_POST["ziduan"];
$zt=@$_POST["zt"];

//echo $ziduan;
//echo "<br>";
//echo $zt;

if(count($id)==0)
{
    echo "<script>alert('Please choose to update information');location.href='consultType.php'</script>";
    exit();
}
$db= new DbMysql();
foreach($id as $v)
{
    $nr=$_POST["order".$v];
     if($ziduan=="typezt")
     {
         $nr=$zt;
     }
    $sql="update consultType set $ziduan='$nr' where id=$v";
    
//    echo $sql;
//    echo "<br>";
    $isok=$db->sql($sql);
    if($isok!=1)
    {
       echo "<script>alert('An unknown error');location.href='consultType.php'</script>";
   }

   echo "<script>alert('Batch order success');location.href='consultType.php'</script>";
    
}

?>
