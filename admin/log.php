<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';
        
$pagesize=5;
$log = new DbMysql();
$log->sql("select * from adminLog");
$infocount=$log->affected();
$page = new page($infocount,$pagesize);

 
        
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Log management</title>
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
        <td height="31"><div class="titlebt">Log date</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td height="71" valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9"><table width="100%" height="138" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="left_txt">location: The admin log date</td>
          </tr>
          <tr>
            <td height="20"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td></td>
              </tr>
            </table></td>
          </tr>
   
          <tr>
            <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
                <td width="20%" class="left_bt2"> Account </td>
                <td width="20%" class="left_bt2"> Password </td>
                <td width="16%" class="left_bt2"> Date </td>
                <td width="6%" class="left_bt2"> IP </td>
                <td width="13%" class="left_bt2"> State </td>
                <td width="25%" class="left_bt2"> Operation </td>
              </tr>
            </table></td>
          </tr>
          <?php

          $result=$log->select("select * from adminLog order by id desc ".$page->limit());
          foreach ($result as $row){
          ?>
            <tr>
            <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" >
              <tr class='left_txt2'>
                <td width="108"><?php echo $row["username"];?></td>
                <td width="107"><?php echo $row["password"];?></td>
                <td width="87"><?php echo date("Y-m-d h:i:s",$row["addtime"]);?></td>
                <td width="30"><?php echo $row["ip"];?></td>
                <td width="73"><?php 
                
                if($row["state"]==1)
                  {
                    echo "Normal landing";
                  }
                 if($row["state"]==-1)
                  {
                     echo "<i>password mistake</i>";
                  } 
                  if($row["state"]==-2)
                  {
                     echo "<b>no account</b>"; 
                  }
                    ?></td>
                <td width="134">
                    <?php
                     if($_SESSION["rights"]!=1)
                     {
                       echo "delete";
                     }
                     else
                     {
                    ?>
                    <a href='logdel.php?id=<?php echo $row["id"];?>'>delete</a>
                <?php
                      }
                ?>
                </td>
              </tr>
            </table></td>
          </tr>
     <?php
          }
     ?>
        </table>
      <div style="text-align:center;height:50px;line-height:50px;">  <?php
        
        

        //echo $page->hello();
        echo  $page->show(2);
        ?>
        </div>
        </td>
      </tr>
    </table></td>
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