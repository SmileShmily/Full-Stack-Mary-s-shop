<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';


$db= new DbMysql();
$sql="select * from productPP ";
$parm=" where 1 ";  //基本条件语句

$recommend=@$_GET["recommend"];

if($recommend!="")
{
    $parm.=" and recommend='$recommend' ";
}

$sql.=$parm;
$sql.=" order by pporder ";
$db->sql($sql);
$infocount=$db->affected();  //信息总数量
$pagesize=10; //每页数量

 

$page= new page($infocount, $pagesize);



echo $sql;
$sql.=$page->limit();
$result=$db->select($sql);

 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>product pp</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F8F9FA;
}
-->
</style>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">ProductPP</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td height="71" valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
       <div>
<!---->
                  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="left_txt">location: productpp list</td>
          </tr>
          <tr>
            <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td><div class="add"><A href='product_PPadd.php'><img src="images/add.gif" width="16" height="16" /> Add a new PP</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>
                <div style="line-height:25px;font-size:12px;">
               View: <a href="product_pp.php">  All  </a> <a href="?recommend=1">  Recommended  </a> <a href="?recommend=2">  No recommend  </a>     
                    
                </div>
                <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
              <Td width="30" class="left_bt2"></Td>
                <td class="left_bt2">Rank</td>
                <td class="left_bt2">PPname</td>
                <td class="left_bt2">PP LOGO</td>
                <td class="left_bt2">Recommend</td>
                
                <td class="left_bt2">Operation</td>
              </tr>
                  <?php
                  foreach($result as $row)
                  {
                  ?>
              <tr class="left_txt2">
              <Td  bgcolor="#F2F2F2" width="30" class="left_txt2"></Td>
                <td bgcolor="#F2F2F2" class="left_txt2"><?php echo $row["pporder"]?></td>
                <td bgcolor="#F2F2F2" class="left_txt2"><?php echo $row["ppname"];?></td>
                <td bgcolor="#F2F2F2" class="left_txt2"><img src="<?php echo $row["picurl"];?>" width="100" height="50"></td>
                <td bgcolor="#F2F2F2" class="left_txt2">
                    <?php
                    if($row["recommend"]==1)
                    {
                        echo "<span style='color:red;font-weight:bold'>Recommended</span>";
                    }
                    else
                    {
                        echo "No Recommended";
                    }
                    ?>
                </td>
              
                <td bgcolor="#F2F2F2"><A href="product_ppDel.php?id=<?php echo $row["id"];?>">Delete</a> <A href="product_ppEdit.php?id=<?php echo $row["id"];?>">Change</a></td>
              </tr>
               <?php
                  }
               ?>
            </table></td>
          </tr>
 
        </table>
<div id="page"> <?php
echo $page->show(1);
?></div>
                  <!---->
                  
        </div>    
    </td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
      <td height="17" valign="top" background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17" /></td>
    <td background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>
