<?php
require_once '../config/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Member login -<?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/common.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/cart.css" type="text/css">
</head>

<body>
<div id="container">
	<div class="header">
		<span class="help" style="font-size: 14px; font-weight: bold;"><a href="" target="_blank">Help</a></span>
		<div style="padding:12px 0 0 15px;"><a href=""><img src="<?php echo $webdir;?>images/logo.gif" alt=""></a>
        </div>
	</div>
 
<style type="text/css">
.reglogin_box{border:0px;}
.h2_reglogin_a1{height:28px;text-indent:-999em;background:url(<?php echo $webdir;?>images/reglogin_titlebg.png) no-repeat 0 0;}
.h2_login_a1{background-position:0 0;}
.h2_reg_a1{background-position:-404px 0;}
.div_reglogin{margin:10px 0 0 0;height:260px;border:1px solid #dfdfdf;}
.btn_reglogin{background:#ed1b24;height:23px;line-height:23px;color:#fff;font-weight:bold;padding:0 25px;*padding:0 12px;border:0px;}
.shopping_cart_login_box div.bottom{padding:8px 0 0 0;overflow:hidden;zoom:1;margin:20px 13px 0;border-top:1px solid #ccc;}
</style>

	<div class="shopping_cart_login_box">
		<div class="login_box reglogin_box">
			<h2 class="h2_reglogin_a1 h2_login_a1">Member login</h2>
			<div class="div_reglogin">
				<form name="form_login2" action="user_loginSava.php" method="post" id="formLogin">
				<input name="action" value="login" type="hidden">
			 
				<table class="login_table" border="0" cellpadding="5" cellspacing="5" width="90%">
				<tbody><tr>
					<td align="right" height="34" width="25%">E-mail: </td>
					<td width="75%">
						<input class="txtinput" id="login_username" name="login_username" style="width: 140px;" type="text">
						<span class="post_error" id="username_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right" height="34">Password:</td>
					<td>
						<input class="txtinput" id="login_password" name="login_password" style="width: 140px;" value="" type="password">
						<span class="post_error" id="password_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right" height="26">Cord:</td>
					<td> 
    <input class="txtinput" onfocus="codeF('#imglogin_verifycode')" name="login_code" style="width:65px;" maxlength="4" type="text" id="login_code">
						<img id="imglogin_verifycode" class="vam hand dpn" >
						<span class="login_code_error" id="login_code_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td height="34">&nbsp;</td>
					<td><span class="login_btn"><input class="btn_reglogin js_login" value="Login" type="submit"></span><span class="forget"><a href="" target="_blank" style="padding-top: 15px; color: rgb(236, 29, 39);">Forget password?</a></span></td>
				</tr>
				</tbody></table>
				</form>
				<div class="bottom">
					 Welcome
				</div>
			</div>
		</div>
		<div class="reg_box reglogin_box">
			<h2 class="h2_reglogin_a1 h2_reg_a1">Quick Register</h2>
			<div class="div_reglogin">
				<form name="form_register" id="regform" action="" method="post" style="padding-top:5px;">
				<input name="action" value="register" type="hidden">
				<input name="referer_url" value="" type="hidden">
				<table class="login_table" border="0" cellpadding="5" cellspacing="5" width="95%">
				<tbody><tr>
					<td align="right" width="30%">Your Email:</td>
					<td width="70%">
						<input class="txtinput" id="input_register_username" name="username" style="width: 140px;" type="text">
						<span id="span_register_username" class="post_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right"></td>
					<td style="color: rgb(136, 136, 136); line-height: 1.5;">Please fill in Email, we will send the address of your account information, order notifications, etc.</td>
				</tr>
				<tr>
					<td align="right" height="25">Password:</td>
					<td>
						<input class="txtinput" id="input_register_password" name="password" style="width: 140px;" value="" type="password">
						<span id="span_register_password" class="post_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right" height="25">Confirm:</td>
					<td>
						<input class="txtinput" id="input_register_password_confirm" name="password_confirm" style="width: 140px;" value="" type="password">
						<span id="span_register_password_confirm" class="post_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td align="right" height="24">Code:</td>
					<td>
					 <input class="txtinput" onfocus="codeF('#regcode')" name="code" style="width:65px;" maxlength="4" type="text" id="code">
						<img id="regcode" class="vam hand dpn" >
						<span id="regcode_error" class="code_error">&nbsp;</span>
					</td>
				</tr>
				<tr>
					<td height="30">&nbsp;</td>
					<td><input class="btn_reglogin js_register" value="Agreement and register" type="submit"></td>
				</tr>
				<tr>
					<td align="right" height="24">&nbsp;</td>
					<td>
						Read<a href="" target="_blank">User registration agreement</a>
					</td>
				</tr>
				</tbody></table>
				</form>
			</div>
		</div>
		<div style="clear:both;"></div>
			</div>

	<div style="clear:both;"></div>
	<!-- footer start -->
<div class="footer_checkout"> JieXu shop 2014-2015 </div>
<script src="../Images/jquery.js" type="text/javascript"></script>
<script src="../Images/index_v5.js" type="text/javascript"></script>  
<script>
$(function(){
//注册
$('#regform').submit(function(){
     var username = $('#input_register_username').val();
        if(!username)
           {
               $('#span_register_username').html('Please enter the account!');
                return false;
           }
           else
           {
                //进入判断
                if(isemail(username))
                    {
                    $('#span_register_username').html('');  
                    }
                    else
                     {
                    $('#span_register_username').html('Wrong account format.'); 
                    return false;
                     }
              
           }
           
                   var password =$('#input_register_password').val();
        if(!password)
            {
                 $('#span_register_password').html('Please enter the password');
                   return false;
            }
            else
                {
                 $('#span_register_password').html('');
                
                }
         var password =$('#input_register_password_confirm').val();
        if(!password)
            {
                 $('#span_register_password_confirm').html('Please enter the password');
                 return false;
            }
            else
            {
                 if($('#input_register_password_confirm').val()!=$('#input_register_password').val()){
                  $('#span_register_password_confirm').html('Please enter the same password');
                  return false;
                 }else{
                 $('#span_register_password_confirm').html('');}
            }    
            
     jQuery.ajax({
	url:"../ajax/ajaxUserRegSava.php",
	data:$('#regform').serialize(),
	type:"POST",
	success:function(data){
		  alert(data);
		  switch(data)
		  {
			  case "0":
			     $('#regcode_error').html('Verification code error!');
				break;
			  case "5":
			    $('#span_register_username').html('Account already exists!');
				break;	
			  case "1":
			     alert('After checking account registration is successful, but requires the administrator to use!');
				 break;
			  case "2":
			     location.href="user_main.php";
				 break;	 
			   default:
			   alert('Unknown error, login failure, please contact your administrator');	 		
		  }
		  
		},
	error:function(e){
		 //错误的页面.
		  alert('The form submission errors');
		}
	});	
	
 
  
    return false;
});
    $('#code').blur(function(){
       // var code=$('#input_register_password').val();
        if(!$(this).val()) 
            {
                 $('#regcode_error').html('Please Enter Verify Code');
            }
            else
                {
                 $('#regcode_error').html('');
                }
    });
    $('#input_register_password').blur(function(){
        var password =$('#input_register_password').val();
        if(!password)
            {
                 $('#span_register_password').html('Please enter the password');
            }
            else
                {
                 $('#span_register_password').html('');
                }
    });
    $('#input_register_password_confirm').blur(function(){
        var password =$('#input_register_password_confirm').val();
        if(!password)
            {
                 $('#span_register_password_confirm').html('Please enter the password');
            }
            else
            {
                 if($('#input_register_password_confirm').val()!=$('#input_register_password').val()){
                  $('#span_register_password_confirm').html('Please enter the same password');
                 }else{
                 $('#span_register_password_confirm').html('');}
            }
    });    
    $('#input_register_username').blur(function(){
        var username = $('#input_register_username').val();
        if(!username)
           {
               $('#span_register_username').html('Please enter the account!');
           }
           else
           {
                //进入判断
                if(isemail(username))
                    {
                    $('#span_register_username').html('');  
                    }
                    else
                     {
                    $('#span_register_username').html('Wrong account format.');      
                     }
              
           }
    });


//登陆	
$('#formLogin').submit(function(){
var username=$('#login_username').val();
if(!username)
{
    $('#username_error').html('Please enter the account!');
    return false;
}

 if(!isemail(username))
{
    $('#username_error').html('Wrong account format.'); 
    return false;
}

var password=$('#login_password').val();
if(!password)
    {
     $('#password_error').html('Please enter a password!'); 
       return false;
    }
var code = $('#login_code').val();
if(!code)
    {
        $('#login_code_error').html('Please enter a code!');
        return false;
    }
jQuery.ajax({
	url:"userLoginSava.php",
	data:$('#formLogin').serialize(),
	type:"POST",
	success:function(data){
		  //alert(data);
		  switch(data)
		  {
			  case "0":
			    $('#login_code_error').html('Verification code error!');
				break;
			  case "-1":
			    $('#username_error').html('Account does not exist!');
				break;	
			  case "-2":
			    $('#password_error').html('Password error!');
				break;
			  case "1":
			     $('#username_error').html('Account has not approved.');
				 break;
			  case "3":
			     $('#username_error').html('Account is locked.');
				 break;	 
			  case "2":
			      location.href="user_main.php";
				 break;	 
			   default:
			   alert('Unknown error, login failure, please contact your administrator');	 		
		  }
		  
		},
	error:function(e){
		 //错误的页面.
		  alert('The form submission errors');
		}
	});	
	
return false; 
});
	});

    $('#login_password').blur(function(){
        var password =$('#login_password').val();
        if(!password)
            {
                 $('#password_error').html('Please enter a password!');
            }
            else
                {
                 $('#password_error').html('');
                }
    });
    $('#login_username').blur(function(){
        var username = $('#login_username').val();
        if(!username)
           {
               $('#username_error').html('Please enter a code!');
           }
           else
           {
                //进入判断
                if(isemail(username))
                    {
                    $('#username_error').html('');  
                    }
                    else
                     {
                    $('#username_error').html('Wrong account format.');      
                     }
              
           }
    });
function isemail(str)
{
    var search_str=/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
    if(!search_str.test(str))
        {
            return false;
        }
 return true;       
}
</script>
	<!-- footer end -->
</div>
</body>
</html>
