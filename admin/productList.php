<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/ProductType.class.php';

$select= new DbMysql();
$result=$select->select("select * from productList");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
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
        <td height="31"><div class="titlebt"> ProductType </div></td>
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
            <td class="left_txt"> location: ProductType list</td>
          </tr>
          <tr>
            <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td><div class="add"><A href='productList_add.php'><img src="images/add.gif" width="16" height="16" /> Add Type</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
                <td class="left_bt2" width="20">ID</td>
                <td class="left_bt2"> ProductTitle </td>
                 
                 
                <td class="left_bt2"> Operation </td>
              </tr>
             <?php
             $ptype=new ProductType();
             
           $menus = $ptype->infoList();
           //var_dump($menu);
           //echo $menu;
            $menu="";
            foreach($menus as $row)
            {
                 $menu.="<tr class='left_txt2'>";
                 $menu.="<td bgcolor='#F2F2F2'>".$row["id"]."</td>";
                 $menu.="<td bgcolor='#F2F2F2'>|". str_repeat("-", substr_count($row["idpath"], "_")*2).$row["typename"]."</td>";
                 $menu.="<td bgcolor='#F2F2F2'><a href='productListDel.php?id=".$row["id"]."'>Delete</a> <a href='productList_edit.php?id=".$row["id"]."'>Change</a></td>";
                 $menu.="</tr>";
            }
            echo $menu;
           ?>
              
             
            </table></td>
          </tr>
 
        </table>
        <div id="page"> </div>
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
 