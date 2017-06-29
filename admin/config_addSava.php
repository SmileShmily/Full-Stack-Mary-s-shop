<?php


require_once 'islogin.php';
require_once '../Plus/DbMysql.php';
require_once '../plus/config.class.php';


$varshowname=$_POST["varshowname"];
$varname=$_POST["varname"];
$varinfo=$_POST["varinfo"];
$vartype=$_POST["vartype"];
$varvalue=$_POST["varvalue"];


//echo $varname;
//echo "<hr>";
//echo $varinfo;
//echo "<hr>";
//echo $vartype;
//echo "<hr>";
//echo $varvalue;


//echo $varshowname;
//exit;

if(preg_match("/[^a-z_]/i",$varname))
{
    echo "<script>alert('Please enter the letters a-z as a variable name');location.href='config_add.php'</script>";
    exit;
}

if($vartype=="bool" && ($varvalue!="Y" && $varvalue!="N"))
{
        echo "<script>alert('As a Boolean type, you need to input the content of the Y or N');location.href='config_add.php'</script>";
        exit;
}

$add = new DbMysql();
$add->sql("select * from webconfig where varname='$varname'");
if($add->affected()>0)
{
    echo "Had variable";
    exit();
}


echo "<hr>";
$isok=$add->sql("insert into webconfig(varname,varshowname,varinfo,vartype,varvalue) values('$varname','$varshowname','$varinfo','$vartype','$varvalue')");

if($isok==1)
{
   $up = new config();
   $up->configUp();
    echo "<script>alert('To add a new variable to success');location.href='config.php'</script>";
}
else
{
    echo "<script>alert('To add a new variable to failed');location.href='config.php'</script>";
}


?>
