<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
$id=$_GET["id"];
$db = new DbMysql();

$result=$db->select("select * from consult where id=$id",1);
$pid=$result["pid"];
$typeid=$result["typeid"];
$ishf=$result["ishf"];
$issh=$result["issh"];
$content=$result["content"];
$recontent=$result["recontent"];
$usernameshow=$result["usernameshow"];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>consult edit</title>
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
<link href="images/skin.css" rel="stylesheet" type="text/css"  />
<script>
function test()
{
    if(document.admin.pid.value=='')
        {
            alert("PID can not be empty");
            return false
        }
    if(document.admin.typeid.value=='')
        {
            alert('Please select a TypeID');
            return false;
        }
    if(document.admin.content.value=='')
        {
            alert('Please fill consult content');
            return false;   
        }
    if(document.admin.usernameshow.value=='')
        {
            alert('Usernameshow cannot be empty');
            return false;
        }
        
        
  return true;  
}
</script>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">Consult</div></td>
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
            <td class="left_txt">location: Consult edit</td>
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
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Consult basic information</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <form name="admin" id="admin" method="POST" action="consult_editSava.php" onsubmit="return test();">
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">PID:</td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input type="hidden" name="id" value="<?php echo $id;?>" ><input name="pid" type="text" id="pid" size="30" value="<?php echo $pid;?>" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">PID link</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">TypeID:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                  <select name="typeid" id="typeid">
                  <option value="">Please select a TypeId</option>
                   <?php
                   $result=$db->select("select * from consultType where typezt=1 order by typeorder");
                   foreach($result as $row)
                   {
                       if($typeid==$row["id"])
                       {
                      echo "<option value='".$row["id"]."' selected>".$row["typename"]."</optipon>";     
                       }
                       else{
                       echo "<option value='".$row["id"]."'>".$row["typename"]."</optipon>";
                   
                       }
                   }
                   ?>
                  </select></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">TypeID just show background</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Information:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input type="radio" name="issh" id="radio" value="0" <?php if($ishf==0) echo "checked";?> />
                 Checking
                    <input name="issh" type="radio" id="radio2" value="1" <?php if($ishf==1) echo "checked";?> />
                    <label for="issh"></label>
                  Checked
                    <label for="issh"></label></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Checking don't show front</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Reply:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input type="radio" name="ishf" id="radio3" value="0" <?php if($ishf==0) echo "checked";?> />
                Replying
                    <input name="ishf" type="radio" id="radio4" value="1" <?php if($ishf==1) echo "checked";?> />
                    <label for="ishf">Replyed</label></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
              </tr>
             
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Content:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td height="30" colspan="2" bgcolor="#f2f2f2"> 
                  <textarea name="content" id="content" cols="45" rows="5"><?php echo $content;?></textarea></td>
                </tr>
                              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Recontent:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td height="30" colspan="2" bgcolor="#f2f2f2"> 
                  <textarea name="recontent" id="recontent" cols="45" rows="5"><?php echo $recontent;?></textarea></td>
                </tr>
                 <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Usernameshow:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="usernameshow" type="text" id="usernameshow" size="30" value="<?php echo $usernameshow;?>" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Front usernameshow, can be a virtual one</td>
              </tr>
 
              <tr>
                <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Change" />
                   &nbsp;
                   <input type="reset" name="button2" id="button2" value="Reset" /></td>
                </tr>
                </form>
            </table></td>
          </tr>
        </table>
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
