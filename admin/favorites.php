<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/Page.class.php';


$sql="select * from favorites"; //基本语法
$parm=" where 1 ";  //条件
$sql.=$parm;
$db= new DbMysql();

$pagesize=10;//每页显示数量
$db->sql($sql);
$infocount=$db->affected();
$page=new page($infocount,$pagesize);
$sql.= $page->limit();

//信息总数�?

$result=$db->select($sql);//最终执�?

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>user</title>
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
        <td height="31"><div class="titlebt">Favorites</div></td>
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
            <td class="left_txt">location: Favorites list</td>
          </tr>
          <tr>
            <td height="20">
                   
                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              
            </table></td>
          </tr>
          <tr>
            <td>
            <form action="user_alldel.php" method="post" name="userinfo">
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
              <Td class="left_bt2"></Td>
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td class="left_bt2">ID</td>
                <td class="left_bt2">Pid</td>
                <td class="left_bt2">price</td>
                <td class="left_bt2">Pstatus</td>
                <td class="left_bt2">Username</td>
                <td class="left_bt2">Addtimer</td>
                <td class="left_bt2">Operation</td>
              </tr>
            <?php
            if($infocount>=1)
            {
                                 foreach($result as $rows)
                                 {
                                 ?>         
              <tr class="left_txt2">
              <td bgcolor="#F2F2F2">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                 <td bgcolor="#F2F2F2" ></td>
                <td bgcolor="#F2F2F2">&nbsp;<?php echo $rows["id"];?></td>
                <td bgcolor="#F2F2F2" >&nbsp;<?php echo $rows["pid"];?></td>
                <td bgcolor="#F2F2F2" >&nbsp;<?php echo $rows["price"];?></td>
                <td bgcolor="#F2F2F2" >&nbsp;<?php echo $rows["pstatus"];?></td>
                <td bgcolor="#F2F2F2">&nbsp;<?php echo $rows["username"];?></td>
                <td bgcolor="#F2F2F2" >&nbsp;<?php echo $rows["addtime"];?></td>
                <td bgcolor="#F2F2F2"><a href="favorites_del.php?action=del&id=<?php echo $rows["id"];?>">Delete</a></td>
              </tr>
            <?php
                                 }
                                 
                                 }
 else {
	echo "<tr><td colspan=10><div style='line-height:25px;font-weight:bold;text-align:center;color:red;'>No data</div></td></tr>";
 }
                                 ?>  
            </table></form></td>
          </tr>
 
        </table>
        
                  <!---->
                  <div style="text-align:center;height:50px;line-height:50px;">  <?php
        
        

        //echo $page->hello();
        echo  $page->show(2);
        ?>
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
