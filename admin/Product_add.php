<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/productType.class.php';

$ptype= new ProductType();
$db= new DbMysql();
$menu=$ptype->floption(0);
$_SESSION["file_info"] = array();
$_SESSION["urlfile_info"]=array();  //保存图片的URL
$_SESSION["fileid"]="";

$productID=time(); //
$productID.=rand(333,555)*1000;
//根据SWFUPload的思路，添加我们要得东西
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Product add</title>
<script type="text/javascript" src="swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/handlers.js"></script>
<script type="text/javascript" src="../image/jquery-1.6.js"></script>
<script type="text/javascript">
		var swfu;
		window.onload = function () {
			swfu = new SWFUpload({
				// Backend Settings
				upload_url: "upload.php",
				post_params: {"PHPSESSID": "<?php echo session_id(); ?>"},

				// File Upload Settings
				file_size_limit : "2 MB",	// 2MB
				file_types : "*.jpg",
				file_types_description : "JPG Images",
				file_upload_limit : "0",

				// Event Handler Settings - these functions as defined in Handlers.js
				//  The handlers are not part of SWFUpload but are part of my website and control how
				//  my website reacts to the SWFUpload events.
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,

				// Button Settings
				button_image_url : "images/SmallSpyGlassWithTransperancy_17x18.png",
				button_placeholder_id : "spanButtonPlaceholder",
				button_width: 180,
				button_height: 18,
				button_text : '<span class="button">Select Images <span class="buttonSmall">(2 MB Max)</span></span>',
				button_text_style : '.button { font-family: Helvetica, Arial, sans-serif; font-size: 12pt; } .buttonSmall { font-size: 10pt; }',
				button_text_top_padding: 0,
				button_text_left_padding: 18,
				button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
				button_cursor: SWFUpload.CURSOR.HAND,
				
				// Flash Settings
				flash_url : "swfupload/swfupload.swf",

				custom_settings : {
					upload_target : "divFileProgressContainer"
				},
				
				// Debug Settings
				debug: false
			});
		};                
                function imgdel(pid)
                {
                    // 移动 thumbnails 这个容器下面的
                    // altok _ pid
                    // 移除掉              
                var ydiv = document.getElementById('altok'+pid);
                document.getElementById("thumbnails").removeChild(ydiv);  
                // 不光要移动咱们视觉上得删除
                //还要删除session 
                // 删除服务器上的图片
                $.ajax({
                    type:"post",
                    url:"delimg.php?id="+pid
                });
                }
	</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F8F9FA;
}
.imgshow
{
    float:left;
    border:1px solid #ff0000;
    margin-right: 10px;
    margin-bottom: 5px;
    padding:5px;
}
-->
</style>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<script src="../ckeditor/ckeditor.js"></script>
<script>
function test()
{
  if(document.admin.numbers.value=='')
  {
	  alert('ProductID code cannot be empty');
	  return false;
  }
  if(document.admin.title.value=='')
  {
	  alert('ProductTitle cannot be empty');
	  return false;
  }
  if(document.admin.typeid.value=='')
  {
	  alert('ProductType cannot be empty');
	  return false;
  }
  if(document.admin.kucun.value=='')
  {
	  alert('Inventory can not be empty');
	  return false;
   }
   if(document.admin.hits.value=='')
   {
	   alert('Please fill in the hits num');
	   return false;
	}
	if(document.admin.picurl.value=='')
	{
		alert('Please select a thumbnail for the goods');
		return false;
	}
	if(CKEDITOR.instances.content.getData()=='')
	{
		alert('Please fill in the introduction');
		return false;
	}
return true;	
}
</script>
</head>
<body>
    <form name="admin" id="admin" method="POST" action="product_addSava.php" onsubmit="return test();">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"> Product </div></td>
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
            <td class="left_txt">location: Add New Product</td>
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
                <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;ProductInfo</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
			
                            <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">ProductID: </td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="numbers" type="text" id="numbers" size="30" value="<?php echo $productID;?>" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The serial number of goods for goods management, no goods numbering system will be automatically generated</td>
              </tr>
                            <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">ProductTitle: </td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="title" type="text" id="title" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The name of the commodity, use for the front desk to show</td>
              </tr>
                                  <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">ProductPP: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                  <select name="ppid" id="ppid">
                  <option value="0">non-PP</option>
                  <?php
                    $result=$db->select("select * from productPP order by pporder");
                    foreach($result as $row)
                    {
                        echo "<option value='".$row["id"]."'>".$row["ppname"]."</option>";
                    }
                  ?>
                  </select></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">Belongs to the brand, for according to the brand</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">ProductType: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><label for="typeid"></label>
                  <select name="typeid" id="typeid">
                  <option value="">Please select a Type</option>
                  <?php
                  echo $menu;
                  ?>
                  </select></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The category, used for productType</td>
              </tr>
                
             <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">ProductStyle: </td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2" class="left_txt"><input name="hot" type="checkbox" value="1">Hot <input name="drop" type="checkbox" value="1">Cleance <input name="recommend" type="checkbox" value="1">Recommended</td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">The name of the commodity, use for the front desk to show</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Inventory: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="kucun" type="text" id="kucun" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">If the inventory is zero, not to place an order</td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">View: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="hits" type="text" id="hits" value="0" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">You can initialize a number, browse for the goods from the show</td>
              </tr>
               <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">MSRP:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="yprice" type="text" id="yprice" value="0" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
              </tr>
               <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Sale price:</td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2"><input name="price" type="text" id="price" value="0" size="30" /></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Thumbnails: </td>
                <td width="1%" bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2" class="left_txt"><input type="text" value="" id="picurl" style="width:280px;" name="picurl"/></td>
                <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt"><iframe name="upfile" frameborder="0" width="300" height="25" src="uploadPic.php"></iframe></td>
              </tr>
 <tr>
 <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">Atlas of Product: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td width="32%" height="30" bgcolor="#f2f2f2" colspan="2" class="left_txt"><?php
	if( !function_exists("imagecopyresampled") ){
		?>
	<div class="message">
		<h4><strong>Error:</strong> </h4>
		<p>Application Demo requires GD Library to be installed on your system.</p>
		<p>Usually you only have to uncomment <code>;extension=php_gd2.dll</code> by removing the semicolon <code>extension=php_gd2.dll</code> and making sure your extension_dir is pointing in the right place. <code>extension_dir = "c:\php\extensions"</code> in your php.ini file. For further reading please consult the <a href="http://ca3.php.net/manual/en/image.setup.php">PHP manual</a></p>
	</div>
	<?php
	} else {
	?>
 
		<div style="display: inline; border: solid 1px #7FAAFF; background-color: #C5D9FF; padding: 2px;">
			<span id="spanButtonPlaceholder"></span>
		</div>
 
	<?php
	}
	?>
                	<div id="divFileProgressContainer" style="height: 75px;"></div>
	<div id="thumbnails"> </div>
                </td>
              </tr>
              <tr>
                <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">ProductContent: </td>
                <td bgcolor="#f2f2f2">&nbsp;</td>
                <td height="30" colspan="2" bgcolor="#f2f2f2"> 
                  <textarea name="content" id="content" cols="45" rows="5" class="ckeditor"></textarea></td>
                </tr>
              <tr>
                <td height="30" colspan="4" align="center" class="left_txt"><input type="submit" name="button" id="button" value="Create" />
                   &nbsp;
                   <input type="reset" name="button2" id="button2" value="Reset" /></td>
                </tr>
    
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
                    </form>
</body>
</html>
