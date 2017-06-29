<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Jie xu shop</title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css"/>
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user_reg.css" type="text/css"/>
</head>
<body>
 	 <?php
   include WEBDIR.'/include/top.php';
?>

		 

		  <div id="container">
	<!-- member center start -->
			
	<div class="u_content">
	<div class="u_header u_m_bottom">
		<h2>My account</h2>
	</div>
	<div class="member">
		    			   		<!--会员中心菜单开始-->
              <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
    		<!--会员中心菜单结束-->	

			
		<div class="main">
			<div>
<form name="form_edit_profile" action="user_passwordSava.php" method="post" id="edit">

<!-- start 修改资料表单 -->
<h2 class="title">Change password</h2>
<table class="edit_profile" border="0" cellpadding="0" cellspacing="0" width="100%">
<thead><tr><td colspan="2">The following information is required</td></tr></thead>

<tbody><tr>
	<td width="15%">Old password:</td>
	<td width="85%"><input name="yPassword" class="must" type="text" id="yPassword"><span id="ypwd_error">* </span></td></tr>
<tr>
	<td>New password</td>
	<td><input name="xPassword" class="must" type="text" id="xPassword"><span id="xpwd_error">* </span></td></tr>
<tr>
	<td>Confirm:</td>
	<td><input name="qPassword" value="" class="must" type="text" id="qPassword"><span id="qpwd_error">* </span></td></tr>
 <Tr><td></td><td></td></Tr>
</tbody></table>

 

<fieldset style="border:0;text-align: center;margin-top:25px;">

		<input value="Save" class="input_button" type="submit">

</fieldset>
<!-- end 修改资料表单 -->

				</form>
			
			</div>
		</div>

 

			<div style="clear:both;"></div>
	</div>
	</div>	<!-- member center end -->

</div>
	 

	 
		 

		<!-- footer -->
		 
<?php
   include WEBDIR.'/include/foot.php';
?>
 
 <script type="text/javascript">
 $(function(){
	$('#edit').submit(function(){
		 
		 if(!$('#yPassword').val()){
			 $('#ypwd_error').html('Please fill in the password');
 
			 return false;
			 }
                         else
                         {
                                  $('#ypwd_error').html('');
                         }
		 		 if(!$('#xPassword').val()){
			 $('#xpwd_error').html('Please fill in the new password');
 
			 return false;
			 }
                         else
                         {
                                  $('#ypwd_error').html('');
                         }
                         
 		 	if(!$('#qPassword').val()){
			 $('#qpwd_error').html('Please fill in the confirm password');
 
			 return false;
			 }
                         else
                         {
                                  $('#qpwd_error').html('');
                         } 
                         
                         if($('#qPassword').val()!=$('#xPassword').val()){
                             $('#qpwd_error').html('Please make sure that the two input password');
                             return false;
                         }
  
		}) 
	 
  })
 
 </script>
	<!--content ok--><!-- OK -->

</body>
</html>
