<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';

$add = new DbMysql();
$result=$add->select("select * from articleType");
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>article add</title>
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
<script src="../ckeditor/ckeditor.js"></script>
<script>
function test(){
    if(document.admin.title.value=='')
    {
		alert('Please enter article title');
		return false;
	}
	if(document.admin.typeid.value=='')
	{
	    alert('Please enter article class');
		return false;
	}
	if(document.admin.author.value=='')
	{
	   alert('Please enter article author');
	   return false;
	}
	if(document.admin.com.value=='')
	{
		alert('Please enter article source');
		return false;
    }
	if(document.admin.hits.value=='')
	{
	   alert('Please enter article view');
	   return false;
	}
	if(CKEDITOR.instances.content.getData()=='')
	{
	   alert('Please enter article content');
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
        <td height="31"><div class="titlebt">Article</div></td>
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
            <td class="left_txt">location:add new article</td>
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
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;Article Information</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<form name="admin" id="admin" method="POST" action="article_addSava.php" onsubmit="return test();">
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Article Title:</td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="title" type="text" id="title" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Article Title,PWD</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Article Class:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                  <select name="typeid" id="typeid">
                  <option value="">please choose class</option>
                  <?php
                  foreach ($result as $row){
                  
                   echo " <option value='".$row["id"]."'>".$row["typename"]."</option>";
                 
                  }
                   ?> 
                  </select></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">CategoriesID,pwd</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Article Author:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="author" type="text" id="author" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Article Source:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="com" type="text" id="com" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"></td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Article View:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="hits" type="text" id="hits" value="0" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">You can initialize a quantity,used to display the view of the article</td>
              </tr>
 
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Article Content:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td height="30" colspan="2" bgcolor="#f2f2f2"> 
                  <textarea name="content" id="content" cols="45" rows="5" class="ckeditor"></textarea></td>
                </tr>
              <tr>
                <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Create" />
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
