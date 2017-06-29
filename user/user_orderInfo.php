<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

$id=$_GET["id"];

$order = new order();

$sql="select * from productOrder  where username='".UID."' and id='$id'";
$result=$db->select($sql,1);
$infocount=$db->affected();

 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/user.css" media="all"/>
<title>orderID<?php echo $result["orderID"];?>details</title>
<style type="text/css" id="suggest-style">html{color:#333;background:#fff;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:normal;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:text-top;}sub{vertical-align:text-bottom;}input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit;}input,textarea,select{*font-size:100%;}legend{color:#333;}.clear{height:0;font-size:0;line-height:0;clear:both;}
body{font-size:12px;background:#fff;font-family:tahoma,verdana,arial,helvetica,sans-serif;text-align:center;color:#333;}
a{color:#333;text-decoration:none;}
a:hover{color:#cc0000;}.suggest-container{background:white;border:1px solid #999;z-index:99999}.suggest-shim{z-index:99998}.suggest-container li{color:#404040;padding:1px 0 2px;font-size:12px;line-height:18px;float:left;width:100%}.suggest-container li.selected{background-color:#39F;cursor:default}.suggest-key{float:left;text-align:left;padding-left:5px}.suggest-result{float:right;text-align:right;padding-right:5px;color:green}.suggest-container li.selected span{color:#FFF;cursor:default}.suggest-bottom{padding:0 5px 5px}.suggest-close-btn{float:right}.suggest-container li,.suggest-bottom{overflow:hidden;zoom:1;clear:both}.suggest-container{*margin-left:2px;_margin-left:-2px;_margin-top:-3px}</style>
 
</head>
<body>
 	 	 <?php
   include WEBDIR.'/include/top.php';
?> 
	<!--head_top-start-->
 
		<!-- header -->
		 


<!--head_top-end-->	<div class="wrapper">
		<!--我的订单详情start-->
		<!--会员中心通栏-->
		    <div class="u_top_gg u_m_bottom">     </div>
		<div class="u_header u_m_bottom">
			<h2>Member</h2>
		</div>
		<div class="u_content">
    	 
   <!--会员中心菜单-->
    			<div class="u_wrap_l">
    <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
	           </div>
             <!--会员中心菜单结束-->  
			<div class="u_wrap_r2">
							 
				 
                        
                                 
				<div class="order_base_info">
                                                   
                                    <h2><span>OrderID:<?php echo $result["orderID"];?></span><span>Addtime <?php echo date($result["addtime"]);?></span><span>Order:<strong id="order_status"> 
                                                  <?php
                                                  echo  $order->getOrderState($result["orderState"]);
                                                  ?>
                                          </strong></span></h2>
 
			 
				</div>
         
              
																			 
								<div class="u_con_box">
					<div class="u_c_header">
						<h3> Subtotal</h3>
					</div>
					<div class="u_c_main">
						<div class="u_c_p15">
							<dl class="order_info_dl">
								<dt>
									<h4>Review</h4>
								</dt>
								<dd>
									<table>
										<tbody><tr>
											<th>Sender&nbsp;&nbsp;name&nbsp;:</th>
											<td><?php echo $result["shren"];?></td>
										</tr>
										<tr>
											<th>Shipping address:</th>
											<td><?php echo $result["shdizhi"];?></td>
										</tr>
										<tr>
											<th>Tel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
											<td><?php echo $result["tel"];?></td>
										</tr>
										<tr>
											<th>Mobile&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
											<td><?php echo $result["mobile"];?></td>
										</tr>
									</tbody></table>
								</dd>
								<dt>
									<h4>Payment information</h4>
								</dt>
								<dd>
									<table>
										<tbody><tr>
											<th>Payment:</th>
                                                                                    <td><?php echo $result["payment"];?></td> 
										</tr>
										<tr>
											<th>Distribution:</th>
											<td>City express</td>
										</tr>
										<tr>
											<th>Shipping&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free:</th>
											<td>$<?php echo $result["yunfei"];?></td>
										</tr>
										<tr>
											<th>Delivery time:</th>
											<td><?php echo $result["dTime"];?></td>
										</tr>
									</tbody></table>
								</dd>
															</dl>
							
							<div class="my_goods_list">
								<h4 style="display:inline;">Shop list</h4> 								<table class="list_base def_list">
									<thead>
										<tr>
											<th>Shop</th>
											<th width="20%">Price</th>
											<th width="20%">Num</th>
											<th width="20%">Delivery</th>
										</tr>
									</thead>
									<tbody>	
                                                                            
                                                                       
                                                                  <?php
                                                                  $qd= $order->getOrderList($result["orderID"]);
                                                                 foreach($qd as $row){
                                                                  ?>        
                                                               <tr> 
								    <td class=\"l\">
								   <div class=\"m_g_info\"> 
									 <div class=\"m_g_title\"><A href='../product/show.php?id=<?php echo $row["pid"]?>' target='_blank' title='".$v["title"]."'><img src='<?php echo $row["picurl"]?>' height='40' width='40' /></a></div> 
                                     </div> 
								 </td> 
							 <td><span class=\"red\">$<?php echo $row["unitPrice"]?> </span></td> 
							 <td><?php echo $row["total"];?></td> 
								 <td>Beijing</td> 												
								 </tr> 	
                                                                            <?php
                                                                 }
                                                                            ?>
                                                                        </tbody>
								</table>
								<div class="my_goods_count">
									<ul>
										<li>Subtotal:<span>$<?php echo $result["price"]?></span></li>
										<li>Shipping:<span>$<?php echo $result["yunfei"]?></span></li>
										<li>Discount:<span>$<?php echo $result["youhui"]?></span></li>
										<li class="red b">Payment<?php echo $result["price"]?><span></span></li>
									</ul>
								</div>
                  
								 
															</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		 
	</div>
 
 <?php
   include WEBDIR.'/include/foot.php';
?>
 
<!--footer-end-->

</body></html>