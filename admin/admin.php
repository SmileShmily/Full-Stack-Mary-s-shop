<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>admin</title>
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
        <td height="31"><div class="titlebt">Admin</div></td>
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
            <td class="left_txt">location: Admin list</td>
          </tr>
          <tr>
            <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td><div class="add"><A href='admin_add.php'><img src="images/add.gif" width="16" height="16" />Add admin</a></div></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;LoginID</td>
                <td class="left_bt2">Permission</td>
                <td class="left_bt2">LoginTime</td>
                <td class="left_bt2">LoginIP</td>
                <td class="left_bt2">LoginSum</td>
                <td class="left_bt2">Opetate</td>
              </tr>
                    <?php
                    $admin= new DbMysql();
                    $pagesize=10;
                    $admin->sql("select * from admin");
                    $infocount=$admin->affected();
                    $page = new page($infocount,$pagesize);
                    $result=$admin->select("select * from admin ".$page->limit());
                    foreach ($result as $row){
                    ?>
              <tr class="left_txt2">
                <td bgcolor="#F2F2F2" class="left_txt2"><?php echo $row["username"];?></td>
                <td bgcolor="#F2F2F2"><?php 
                if($row["rights"]==1)
                {
                    echo "Super admin";
                }
                else
                {
                    echo "General admin";
                }
                ?></td>
                <td bgcolor="#F2F2F2"><?php echo date("Y-m-d h:i:s",$row["loginTime"]);?></td>
                <td bgcolor="#F2F2F2"><?php echo $row["ip"];?></td>
                <td bgcolor="#F2F2F2"><?php echo $row["loginSum"];?></td>
                <td bgcolor="#F2F2F2">
                    <?php
                    if($_SESSION["username"]==$row["username"])
                    {
                        echo "delete";
                    }
                    else{
                     ?>
                    <a href='admin_del.php?id=<?php echo $row["id"];?>'>delete</a><?php
                    }
                    ?> <a href="admin_edit.php?id=<?php echo $row["id"];?>">edit</a></td>
              </tr>
                    <?php
                    }
                    ?>
            </table></td>
          </tr>
 
        </table>
        <div id="page"><?php 
        
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
