<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();
$_SESSION["editOK"]="ok";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>jiexu shop</title>
<meta content="关键词" name="Keywords"> 
<meta content="描述" name="Description"> 
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user_reg.css" type="text/css">
</head>
<body>
  	 <?php
   include WEBDIR.'/include/top.php';
?>
		 
		<div id="container">
		  <!-- member center start -->
		  <div class="u_content">
		    <div class="u_header u_m_bottom">
	    <h2>JieXuShop</h2>
	         </div>
		     <div class="member">
		           			     		<!--会员中心菜单开始-->
              <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
    		<!--会员中心菜单结束-->	
		      <div class="main">
		        <h2 class="title">Shipping address</h2>
		        <div class="member_box_2">
		          <form action="user_receiveSava.php" method="post" name="form_add_consignee" id="fromadd">                  
		            <table border="0" cellpadding="5" cellspacing="5" width="100%">
		              <tbody>
		                <tr>
		                  <td width="15%" height="35"><input type="hidden" name="action" value="add" />Sender:</td>
		                  <td width="85%"><input class="txtinput" name="shren" size="20" type="text" id="shren" />
		                    &nbsp; <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Shipping address:</td>
		                  <td><span class="render_province"></span> <span class="render_city"></span> <span class="render_district"></span>
		                    <input class="txtinput" name="shdizhi" style="width: 220px;" type="text" id="shdizhi" />
		                    &nbsp; <span class="post_notice">Please do not fill in the provinces</span> <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Zip:</td>
		                  <td><input class="txtinput" name="youbian" size="10" type="text" id="youbian" />
		                    &nbsp; <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Cell:</td>
		                  <td><input class="txtinput" name="tel" size="20" type="text" id="tel" />
		                    &nbsp; <span class="post_error">* &nbsp;</span></td>
	                    </tr>
		                <tr>
		                  <td height="35">Mobile:</td>
		                  <td><input class="txtinput" name="mobile" size="20" type="text" id="mobile" />
		                    <span class="post_notice">Note: required a fixed telephone and mobile phone</span> <span class="post_error">&nbsp;</span></td>
	                    </tr>
	                  </tbody>
	                </table>
		            <fieldset style="border:0;text-align: center;margin-top:25px;">
		              <input value="Submit" class="input_button" type="submit" />
	                </fieldset>
	              </form>
	            </div>
	          </div>
 
		      <div style="clear:both;"></div>
	        </div>
	      </div>
		  <!-- member center end -->
</div>
		<!-- footer -->
		 

 
 <?php
   include WEBDIR.'/include/foot.php';
?>
 
 <script type="text/javascript">
  $(function(){
	  $('#fromadd').submit(function(){
		  if(!$('#shren').val())
		  {
			  alert('Please input the consignee');
			  return false;
		   }
		   
		  if(!$('#shdizhi').val())
		  {
			  alert('Please enter a shipping address');
			  return false;
		   }
		  if(!$('#youbian').val())
		  {
			  alert('Please enter a shipping address zip code');
			  return false;
		   }
		  if(!$('#tel').val() && !$('#mobile').val())
		  {
			  alert('Will fill in a fixed telephone and mobile phone');
			  return false;
		   }
		   
     
	 
		   		   		   
		  })
	  })
  </script>
	<!--content ok--><!-- OK -->

</body>
</html>
