<?php
require "public/init.php";

if(!ISLOGIN)
{
    webAlter("Please log in", "user/user_login.php");
}
if(empty($_SESSION["productCart"]))
{
     webAlter("Please choose product", "index.php");
}

$cart = new cart();
$cartList=$cart->cartInfo();
$orderID=  time().  rand(100, 999);
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=gb2312"/>
 <title>Check order -<?php echo $webtitle;?></title>
<link rel="stylesheet" type="text/css" href="css/cart_v3.css"/>
<link rel="stylesheet" type="text/css" href="css/passport_skin.css" media="all"/>
</head>
<body>
<div class="wrapper">
	<!-- start cart_crumb -->
	<div class="cart_header">
		<h1>Cart</h1>
		<a href="">
		<img src="images/logo.gif" class="logo" alt="">		</a>
			 <img src="images/cart/g.gif" height="1" width="1">
			<div class="cart_steps cart_steps_2">
			<strong>my cart</strong>
			<span>Fill in and check order information</span>
			<span>Order submitted successfully</span>
		</div>
	</div>
	<!-- end cart_crumb -->
</div>

<div class="wrapper checkout_form_head">
    <h2>Fill in the check order informationFill in the check order information</h2>
    <span class="tip">Fill in and confirm the following information, and then submit the order</span>
</div>

<div class="wrapper checkout_form">
 

<form method="post" id="form_checkout"  action="orderCartOK.php">
	<fieldset>
<div class="checkout_title" id="consignee_tag">
	<h3 class="c_t_1">Shipping address</h3>
    <span class="tip"><a href="javascript:void(0);" id="edit_but_addrss" class="edit_but blue"></a></span>
</div>

<div class="checkout_box">
	 
        <div id="consignee_area_select"></div>
        <div style="display: block;" id="consignee_area" class="consignee_area">
        <div style="display: block;" id="address_area" class="address_area">
		</div>
            <div style="padding-left: 40px;">
              <?php
              $sql="select * from receive where username='".UID."'";
              $receive=$db->select($sql);
              foreach($receive as $rows)
              {
                  echo "<div class='receive' style=\"line-height: 30px;\" shren='{$rows["shren"]}' shdizhi='{$rows["shdizhi"]}' youbian='{$rows["youbian"]}' tel='{$rows["tel"]}' mobile='{$rows["mobile"]}' ><b>Sender</b>:{$rows["shren"]} Address:{$rows["shdizhi"]} {$rows["youbian"]} {$rows["tel"]} {$rows["mobile"]}</div>";
              }  
               ?> 
            </div>
		<div style="display:block;" id="div_consignee" class="">
		  <dl class="clearfix">
			    <dt><span class="red">*</span> Your name:</dt>
			    <dd><input type="hidden" value="<?php echo $orderID;?>" name="orderid"/>
			        <input name="shren" type="text" id="shren" size="20" maxlength="20"><span class="red" id="shren_error">&nbsp;</span>
			    </dd>
			</dl>
 
		  <dl class="clearfix">
			    <dt><span class="red">*</span> Shdizhi:</dt>
			    <dd>
			        <input name="shdizhi" type="text" id="shdizhi" size="40" maxlength="100">
					<span class="red" id="shdizhi_error">&nbsp;</span>
			    </dd>
			</dl>
			<dl class="clearfix">
			    <dt><span class="red">*</span> Zip:</dt>
			    <dd>
			        <input name="youbian" type="text" id="youbian" size="12" maxlength="6">
					<span class="red" id="youbian_error">&nbsp;</span>
			        <span class="tip gray" >Please fill out six num zip code</span>
			    </dd>
			</dl>
			<dl class="clearfix"> 
			    <dt><span class="red">*</span> Mobile:</dt>
			    <dd>
		          <input name="mobile" type="text" class="focusInput focusTxt" id="mobile" value="" size="26" maxlength="20" rel="固定电话和手机中必填一项">Tel:<input name="tel" type="text" class="focusInput focusTxt" id="tel" value="" size="26" maxlength="20" />
					<span class="red" id="dianhua_error">&nbsp;</span>
			    </dd>
			</dl>
	 
		</div>
	</div>
        
</div>
	<!-- end consignee -->

	<!-- start choose payment method -->
	
<!-- start choose payment method -->
<div class="checkout_title" id="pay_tag"><h3 class="c_t_2">Payment</h3>
	<span class="tip"><a href="javascript:void(0);" id="edit_but_pay" class="edit_but blue"></a></span>
	<span class="tip">
			    <span>Shopping Free:</span>
				<span>Shopping total<b class="price">$50.00</b> Can use cash on delivery (in addition to the overseas area)</span>
			</span>
</div>
<div class="checkout_box">
 
    <div id="pay_delivery_set" style="display: block;">
    	<dl class="pay_delivery_set" id="pay_list">
    	    
    	    <dd>
    	    	<ul id="ul_pay_list" class="delivery"><li><label for="delivery_item_7_cod"><input name="delivery_id" value="货到付款" id="delivery_item_7_cod" class="pay_item" type="radio"> <strong>Pay_tip</strong></label><span class="pay_tip">You can pay later,just cash</span></li><li><label for="delivery_item_1_online"><input name="delivery_id" value="在线支付" id="delivery_item_1_online" class="pay_item" type="radio"> <strong>Payonine</strong></label><span class="pay_tip">Can use debite card or credit card</span></li><li><label for="delivery_item_1_offline"><input name="delivery_id" value="银行汇款" id="delivery_item_1_offline" class="pay_item" type="radio"> <strong>Bank transfer</strong></label><span class="pay_tip">All the cash</span></li></ul>
    	    </dd>
        </dl>
        <dl class="pay_delivery_set" id="delivery_list" style="display: none;">
    	    <dt>Delivery_list</dt>
    	    <dd>
    	    
    	        <ul id="ul_delivery_area" class="delivery"><li><label><em>Delivery_tip</em></label><span class="delivery_tip"></span></li></ul>
    	    </dd>
        </dl>
        <dl class="pay_delivery_set" id="sendtime_list" style="display: block;">
    	    <dt>Delivery time</dt>
    	    <dd>
    	    	<ul id="ul_delivery_time" class="delivery">
    	            <li>
    	                <label for="delivery_time2">
    	                    <input id="delivery_time2" value="Working days, weekends and holidays can be delivery" name="delivery_time" type="radio">
    	                    <strong>Weekends and holidays can be delivery</strong> 
    	                </label>
    	            </li>
    	            <li>
    	                <label for="delivery_time1">
    	                    <input id="delivery_time1" value="Delivery is only working days (weekends and holidays do not send)" name="delivery_time" type="radio">
    	                    <strong>Delivery is only workday (weekends and holidays do not send)</strong>
    	                </label>
    	            </li>
    	            <li>
    	                <label for="delivery_time3">
    	                    <input id="delivery_time3" value="Only weekends and holidays delivery (working days not send)" name="delivery_time" type="radio">
    	                    <strong>Only weekends and holidays delivery (workday not send)</strong>
    	                </label>
    	            </li>
    	        </ul>
    	    </dd>
    	</dl>
 
    </div>
 <!--END-->
</div>
<!-- end choose payment method -->
	<!-- end choose payment method -->

	<!-- start product list -->
	

    <div class="checkout_title">
    <h3 class="c_t_3">Checkout</h3>
    <span class="tip"><a href="cart.php" class="blue">[product] return to shopping cart, change orders</a></span>
    <span id="js_warehouse_tip" class="tip tip_fr "><span class="red"> </span> </span>
    </div>
		<!-- start item grid -->
		<div class="items clearfix">
			<table class="grid" style="width: 917px;" cellspacing="0">
				<thead>
					<tr>
						<td width="70">&nbsp;</td>
						<td style="text-align: left; padding-left: 5px;" width="*">Product name</td> 
						<td width="130">My price</td>
						<td width="100">Num</td>
 
						<td width="90">Total</td>
 
					</tr>
				</thead>
				<tbody>
                             <?php
                                           foreach($cartList as $k=>$v)
              {
                             ?>
            <tr>
        <td><a href="product/show.php?id=<?php echo $k;?>" alt="" target="_blank"><img src="<?php echo str_replace("../", "",$v["picurl"])?>" alt="" class="item" /></a></td>
          <td class="tal"><ul>
            <li><a href="product/show.php?id=<?php echo $k;?>" target="_blank"><?php echo $v["title"]?></a></li>
            <li><?php echo $v["numbers"]?></li>
          </ul></td>
 
          <td><div class="price">$<?php echo $v["unitPrice"]?></div></td>
          <td><?php echo $v["total"]?></td>
          
          <td><?php echo $v["Price"]?></td>
 
        </tr>
                                    <?php
              }
                                    ?>
          
									</tbody>
			</table>
		</div>
		<!-- end item grid -->

	<!-- end product list -->

	
	
	<!--start dm_card-->
     
    <!--end dm_card-->
	
	<!-- start order total -->
    <div class="checkout_title"><h3 class="c_t_4">Total</h3></div>
	<div class="checkout_box ordertotal">
		<p>
<span><em>Count:</em><font id="font_total_count"><?php echo $_SESSION["cartCount"];?>pic</font></span>
 
<span><em>Price:</em>$<font id="font_total_price"><?php echo $_SESSION["cartPrice"];?></font></span> + 
<span><em>shipping:</em>$<font id="font_freight">0.00</font></span> - 
            <span><em>Discount:</em>$<font id="font_total_cashback">00</font></span>
		</p>
		<p>
			<span class="total_amount"><span class="price f14"><em>Total_amount:</em>$<font id="font_total_amount"><?php echo $_SESSION["cartPrice"];?></font></span></span>
		</p><input name="price"  value="<?php echo $_SESSION["cartPrice"];?>" type="hidden" />
	</div>
	<!-- end order total -->
	

	<div class="checkout_sub">
   
    <!-- start message -->
    	<div class="checkout_sub_title" rel="message_panl" id="message_panl_box">
    		<button class="open_panl_but" id="message_but" type="button"></button><h3 class="open_panl_but">Customer questions</h3><span class="tip"><a style="display: none;" href="javascript:void(0);" id="edit_but_message" class="edit_but blue">[Change]</a></span><span class="tip" id="message_tip" style="">100 words</span>
    	</div>
        <div class="checkout_sub_body get_message_body" id="message_panl_return">
        </div>
        <div class="checkout_sub_body get_message_body" id="message_panl"  >
            <textarea class="focusTxt" name="message" id="message" rel=""></textarea>
    
        </div>
	<!-- end message -->
    </div>
	</fieldset>
	
	<!-- start action button -->
	<div class="action_buttons clearfix">
			<div class="action_wrap">
				<div id="id_action_submit" class="">
					<input name="button" type="button" class="checkout_submit sprite" id="orderOK" value="Confirm correct, submit the order">
			  </div>
				<div id="id_action_waiting" class="action_waiting">
					<img src="images/cart/loading.gif">				<span>System processing, please later&hellip;&hellip;</span>
				</div>
			</div>
	</div>
	<!-- end action button -->

	</form>
</div>

<!-- start hidden box -->
<div class="hidden">
	<font id="font_hidden_freight_type">0</font>
	<font id="font_hidden_meet_free_freight">0</font>
	<font id="font_hidden_font_total_cashback">20.00</font>
	<font id="font_hidden_total_amount">3865.00</font>
</div>
<!-- end hidden box -->

<!-- start footer -->
<div class="footer">
	<div class="special-service">
		<h2 class="spe-ser-title">Personality service</h2>
		<ul class="spe-ser-con">
			<li>
				<a class="s-ser-1">A week to a new leading fashion</a>
			</li>
			<li>
				<a  class="s-ser-2">Cost-effective category is complete</a>
			</li>
			<li>
				<a  class="s-ser-3">Brand quality goods The gold medal services</a>
			</li>
			<li>
				<a class="s-ser-4">Professional delivery support cash on delivery</a>
			</li>
			<li>
				<a class="s-ser-5">The unconditional return within 7 days</a>
			</li>
		</ul>
	</div>
	<div class="copyright">
		 banquan
	</div>
</div>
<!-- end footer -->
<script src="Images/jquery.js" type="text/javascript"></script> 
<script>
$(function(){
    
        $('.receive').click(function(){
             $('#shren').val($(this).attr('shren'));
             $('#shdizhi').val($(this).attr('shdizhi'));
             $('#youbian').val($(this).attr('youbian'));
             $('#tel').val($(this).attr('tel'));
             $('#mobile').val($(this).attr('mobile'));
          //   alert(); 
        });
    
     //提交
     $('#orderOK').click(function(){
         if(!$('#shren').val()){
             alert('Please fill out the consignee!');
             return false;
         }
         if(!$('#shdizhi').val())
             {
                 alert('Please fill in the shipping address');
                 return false;
             }
         if(!$('#youbian').val())
             {
                 alert('Please fill in the zip code');
                 return false;
             }
         if(!$('#tel').val()){
             alert('Please fill in the phone');
             return false;
         }    
         if(!$('#mobile').val())
             {
                 alert('Please fill in the mobile');
                 return false;
             }
       
         if($('input[name=delivery_id]:checked').length<1){
             alert('Please select a payment!');
             return false;
         }
         
         if($('input[name=delivery_time]:checked').length<1){
             alert('Please select a delivery time!');
             return false;
         }
         $('#id_action_submit').hide();
         $('#id_action_waiting').show();
         
         
        jQuery.ajax({
            url:"ajax/orderSava.php",
            type:"POST",
            data:$('#form_checkout').serialize(),
            success:function(data){
                alert(data);
                if(data=="1")
                    {
                        location.href="orderCartOK.php?id=<?php echo $orderID;?>";
                    }
            },
            error:function(){
                alert('error');
            }
        })
       
       return false;
     });
})
</script>
</body></html>