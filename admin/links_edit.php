<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$id=$_GET["id"];

$edit = new DbMysql();
$result=$edit->select("select * from links where id =$id",1);


$webname=$result["webname"];
$weburl=$result["weburl"];
$styleid=$result["styleid"];
$logourl=$result["logourl"];
$intro=$result["intro"];


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
<script>
function test()
{
   if(document.links.webname.value=='')
   {
	 alert('Please fill out the link website name');
	 return false;
	}
	if(document.links.weburl.value=='')
	{
	  alert('Please fill out the link website URL');
	  return false;
	}
//	if(document.links.styleid[0].checked  &&  document.links.logourl.value=='')
//	{
//	  alert('LOGO类型链接必须选择LOGO上传地址');
//	  return false;
//	}
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
        <td height="31"><div class="titlebt">Link</div></td>
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
            <td class="left_txt">location: edit new Link</td>
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
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Link information</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <form action="links_editSava.php?id=<?php echo $id;?>" method="POST"  name="links" id="links" enctype="multipart/form-data" onsubmit="return test();">
            <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Link Type: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label>
                  <input type="radio" name="styleid" id="styleid" value="1" <?php
                  if($styleid==1)
                  {
                      echo "checked='checked'";
                  }
                  ?> />LOGO Link
                </label>                  
                  <label>
                    <input type="radio" name="styleid" id="styleid" value="2"  <?php
                  if($styleid==2)
                  {
                      echo "checked='checked'";
                  }
                  ?> />Text Link
                  </label></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Types of affiliation, such as image LOGO link, or text links</td>
              </tr>
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Site name: </td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="webname" type="text" id="webname" size="30" value="<?php echo $webname;?>" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The other website name</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Website address: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid">
                  <input name="weburl" type="text" id="weburl" size="30" value="<?php echo $weburl;?>" />
                </label></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The other website URL address</td>
              </tr>
              
              <tr id="logotr">
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">LOGO address: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input type="file" name="logourl" id="logourl" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Size:88*31<img src="../<?php echo $logourl;?>"></td>
              </tr>
             
               
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Site profile: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><textarea name="intro" cols="30" rows="5" id="intro"><?php echo $intro;?></textarea></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">short description about the other website</td>
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
