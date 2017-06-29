<?php
require '../public/init.php';
$id=  zsStr(@$_GET["id"]);
$sql="select product.*,productList.typename,productList.idpath,productList.id as tid from product inner join productList on product.typeid=productList.id  where product.id='$id'";
$productInfo=$db->select($sql,1);
$menu=$productInfo["idpath"]."_".$productInfo["tid"];
$menuInfo=$action->classPath($menu,'>');
if(empty ($productInfo))
{
    weberror();
}

$db->sql("update product set hits=hits+1 where id='$id'");
 
 

//var_dump(explode("#", $productInfo["picurls"]));
preg_match_all("/(.*?)@(.+?)#/is",$productInfo["picurls"],$arr,PREG_SET_ORDER);
//var_dump($arr);

 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="Content-Language" content="zh-CN"/>
<title><?php echo $productInfo["title"]?> - <?php echo $productInfo["typename"]?> - <?php echo $webtitle;?></title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" href="../css/base_v4.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/global.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../css/goods_list.css" media="all"/>
<link rel="stylesheet" type="text/css" href="../css/product.css" media="all"/>
 <script type="text/javascript" src="show2_files/jquery-1.js"></script>
</head>
<body>

<div style="position: absolute; visibility: hidden; left: 704px; top: 68px; width: 218px;" class="suggest-container"></div>

<!--head_top-start-->
 <!-- header -->
	  	<?php
        include WEBDIR."/include/top.php";
        ?>

<!--head_top-end-->
<div class="wrapper">		<!-- 直显 -->
	

	<!-- 伸缩 -->
	
	<!-- crumb -->
	<div class="crumb">&nbsp;&nbsp;Your location:
	<?php echo "<a href=\"$webdir\">".$webname."</a>";?><?php echo $menuInfo;?>> <?php echo $productInfo["title"]?>
	<span class="span_buytip">All free shipping, full $50support cod (USA only)</span>
	</div>

	<div class="mainbox clearfix">
		<!-- sidebar -->
		<div class="sidebar">
			<div class="div_sideeach div_prokinds">
            <h2 class="h2_prokinds">ProductType</h2>
            <?php
 
			  	 $dyId=$productInfo["tid"];
                 if($productInfo["idpath"]!="0"){
                    $arrs=explode ("_", $productInfo["idpath"]);
                    $dyId=$arrs[1];
                 }
				 //echo $dyId;
				 $leftMenu=$action->ProductShowLeftMenu($dyId);
			?>
				
				 
			</div>



		<!-- 购买过本商品的用户还购买过 start -->
		<div id="rec_banner2">
			<div class="bfd_box">
			  <h1 class="bfd_title"><?php echo $webname;?> Recommend </h1>
			  <div class="bfd_contentbox">
				<div class="bfd_pre_btn"></div>
				<ul class="bfd_content">
                <?php
$productList=$productList=$action->productList(' and recommend=1',8);
foreach($productList as $row)
{ 
     echo "<li  class=\"bfd_item\">";
     echo "<span class=\"bfd_product_img\">";
     echo "<a href='".$webdir."product/show.php?id=".$row["id"]."' target='_blank' >";
     echo "<img title='".$row["title"]."' src='".$row["picurl"]."' height='145' width='145'>";
     echo "</a>";
     echo "</span>";
	 echo "<span class=\"bfd_price\">￥{$row["price"]}</span>";
     echo "</li>";
}
?>
  </ul>
				<div class="bfd_next_btn" style=" float:right"></div>
		 
			  </div>
			</div>
			<div style="display:none" class="bfd_page">1/2</div>
		</div>
		<!-- 购买过本商品的用户还购买过 end -->

		<!-- 浏览过本商品的用户还浏览过 start -->
		<div id="rec_banner1">
			<div class="bfd_box">
			  <h1 class="bfd_title"><?php echo $webname;?> Hot </h1>
			  <div class="bfd_contentbox">
				<div class="bfd_pre_btn"></div>
				<ul class="bfd_content">   <?php
$productList=$productList=$action->productList(' and hot=1',8);
foreach($productList as $row)
{ 
     echo "<li  class=\"bfd_item\">";
     echo "<span class=\"bfd_product_img\">";
     echo "<a href='".$webdir."product/show.php?id=".$row["id"]."' target='_blank' >";
     echo "<img title='".$row["title"]."' src='".$row["picurl"]."' height='145' width='145'>";
     echo "</a>";
     echo "</span>";
	 echo "<span class=\"bfd_price\">￥{$row["price"]}</span>";
     echo "</li>";
}
?></ul>
				<div class="bfd_next_btn" style=" float:right"></div>
			 
			  </div>
			</div>
 
		</div>
		<!-- 浏览过本商品的用户还浏览过 end -->

 


		<!-- 降价商品 start -->
		<div id="reco_show">  <div class="bfd_box">    <div class="div_sideeachb" style="margin:0;">      <h2 class="h2_sideeachb h2_sidehistory"><?php echo $webname;?>降价商品</h2>    </div>    <ul class="ul_d1 ul_sidehistory wly_items">   <?php
$productList=$productList=$action->productList(' and drops=1',8);
foreach($productList as $row)
{ 
     echo "<li>";
 
     echo "<a href='".$webdir."product/show.php?id=".$row["id"]."' target='_blank' >";
     echo "<img title='".$row["title"]."' src='".$row["picurl"]."' height='82' width='82' class=\"wly_img\">";
     echo "</a>";
 
	 echo "<h4 class=\"h4_title wly_title\">${$row["price"]}</h4>";
     echo "</li>";
}
?> </ul>  </div></div>
		<!-- 降价商品 end -->

		</div>

		 

		<div class="maincont">
			<!-- prodetailsinfo -->
			<div class="prodetailsinfo">
				<div class="proviewbox">
					<div class="probigshow">
						<a class="a_probigshow" href="#" ref="<?php echo $productInfo["picurl"];?>"><img src="<?php echo $productInfo["picurl"];?>" alt="" class="js_goods_image_url" width="420" height="420"></a>
					<div class="zoomplepopup"></div><div id="probig_preview"><img src="" alt="" width="1024" height="1024"></div></div>
					<div class="div_prothumb">
						<div class="thumbporbox">
							<ul class="ul_prothumb">
						<li><a href="<?php echo $productInfo["picurl"];?>" target="_blank"><img longdesc="<?php echo $productInfo["picurl"];?>" src="<?php echo $productInfo["picurl"];?>" alt="" width="60" height="60"></a></li>
							<?php
                                                        
                                                        foreach($arr as $row)
                                                            {
                                                              echo "<li><a href=\"{$row[2]}\"><img longdesc=\"{$row[2]}\" src=\"{$row[2]}\" alt=\"{$row[1]}\" title=\"{$row[1]}\" width=\"60\" height=\"60\"></a></li>";
                                                            }
                                                        ?>									 
															</ul>
						</div>
						<span class="span_prev span_prevb">prev</span><span class="span_next">next</span>
					</div>

<!--					<div class="div_prolinks">
						 
						 
					</div>-->

				</div>

				<!-- prodbaseinfo_a -->
				<div id="protop" class="prodbaseinfo_a">
					<h2 class="h2_prodtitle"><?php echo $productInfo["title"]?></h2>
					<ul class="ul_prodinfo">
					
													<li class="li_normalprice"><span class="span_title">My price:</span><b class="b_proprice"><?php echo $productInfo["price"]?></b>$</li>
												<li class="li_marketprice"><span class="span_title">MSRP:</span><span class="span_marketprice"><?php echo $productInfo["yprice"]?></span>$</li>
						<li class="li_prono"><span class="span_title">ID:</span><span class="span_no"><?php echo $productInfo["numbers"]?></span></li>
					 
						<li class="li_brand"><span class="span_title">PP:</span>
                  
                        <?php             
                        $ppinfo=$db->select("select * from productPP where id='".$productInfo["ppid"]."'",1);
 
                        if(!empty($ppinfo))
                        {
                            echo "<A class=\"a_brand\" href=\"\"><span style=\"color:#c00;\">".$ppinfo["ppname"]."</span></a>";
                        }
                          else
                                                {
                                                 echo "no";    
                                                }
                                                ?>
						 
													</li>

					 <li class="li_brand"><span class="span_title">Inventory:</span> <?php echo $productInfo["kucun"];?></li>
					</ul>

										 
					
					<div class="div_choose">
									 
<p class="p_inputnum">Buy:<input id="input_goods_buy_number" class="txt" name="input_goods_buy_number" value="1" type="text"> pic <span class="red" id="input_goods_buy_number_error"></span> </p>
											</div>

					<div class="div_buybtn">
										<a id="a_js_ga_mainbuy" class="a_tobuy" title="Buy now" style="cursor:pointer;">Buy now</a>
										<a class="a_addtofavor" title="Add to favorite" style="cursor:pointer;">Add to favorite</a></div>

					<div class="div_proabs">
						<ul class="ul_proabs">
														<li>View: <b style="display: ;" id="js_jiaohao_view"><?php echo $productInfo["hits"];?></b> num <!-- sale: <b class="b_numa">14847</b> pic　save:<b class="b_numa">2685</b> num--></li>
							<li>Rating: <img src="../image/icon_star_5.gif" alt="" width="63" height="10"> <a class="a_tocomments" href="#h3_commentsherf"></a></li>
                            <li class="li_guarantee">Consumer protection plan:<img title="7 days unconditional return" src="show2_files/bz_ico_1.png"/>
                           <img src="show2_files/bz_ico_2.png" title="Millions of pre PeiJin Let you buy package"/>
                            <img src="show2_files/bz_ico_3.png" title="Price guarantee 7 days"/>
                           <img src="show2_files/bz_ico_4.png" title="V. bing craigslist">
                           <img title="Professional delivery support cash on delivery" src="show2_files/bz_ico_5.png"></li>
						</ul>
					</div>

				</div>
				<div class="clear"></div>
			</div>

			<!-- prodetailsinfo_a over prodetailsinfo_b -->
			<div id="prodinfobox" name="prodinfobox" class="tabbox_a prodetailsinfo_b">

			  <h3 class="tabtitle tabtitle_1"><span class="now">ProductShow</span></h3>
			  <div class="tabcont prodetailsdes">
				<div style="top: 31816px;" class="floatquick">
					<h3 class="h3_op">Operation</h3><a class="a_totop" href="#protop">top</a>
					<p class="p_quickbtn"><a class="a_quickbuy" style="cursor:pointer;">Buy</a><a class="a_addtofavor" style="cursor:pointer;">Save</a><!-- showLogin() 加载ajaxlogin 删除页面底部直接点击弹出层 js --><a class="a_quickask" href="#addconsult">Consult</a></p>
				</div>

						<div class="output">
							<!-- 发布区域 -->
							<!---->
							 
 <?php echo $productInfo["content"];?>
						</div>
			  </div>
			  <h2 class="tabtitle tabtitle_2"><span>ProductID</span></h2>
			  <h3 class="h3_eachtitle">ProductID</h3>
			  <div class="tabcont proargument">
					<ul class="ul_property">
															<li><span class="span_title">Sex:</span>women</li>
															<li><span class="span_title">Material:</span>cattlehide</li>
															<li><span class="span_title">v</span>orange</li>
															<li><span class="span_title">Popular element:</span>Single button</li>
															<li><span class="span_title">Size:</span>Medium package</li>
															<li><span class="span_title">Style:</span>Elegant, classic, contracted</li>
															<li><span class="span_title">Size:</span>other</li>
															<li><span class="span_title">Situation:</span>Leisure, other</li>
															<li><span class="span_title">Style:</span>Dumpling shape</li>
															<li><span class="span_title">Design:</span>Pure color</li>
															<li><span class="span_title">Internal structure:</span>Zipper sandwich, the inside zipper bags, mobile phone bag, document bag</li>
															<li><span class="span_title">Open mode:</span>renovate</li>
															<li><span class="span_title">Made in:</span>china</li>
															<li><span class="span_title">Product:</span>china</li>
												</ul>
					</div>
					<h2 class="tabtitle tabtitle_3"><span>Consult</span></h2>
					<h3 class="h3_eachtitle">Consult</h3>
					<div class="tabcont proconsult">
						<h3 class="h3_comtip">If you have any questions, please consult us<span><a href="#addconsult" class="red">Write a consult</a></span></h3>
					
                                                    <div id="zixunLists">
                                                          <div style="text-align:center;">
						 <img src="/Images/loading.gif" />
                     <br/>Data loading, please wait patiently,<span style='color:#f00;font-weight:bold;'><?php echo $webname;?></span>Without your support...
		</div>			
                                                    </div>		 
						
												<div id="addconsult" class="addconsultbox">
							<form id="consultInfo">
								 <input type="hidden" name="pid" value="<?php echo $productInfo["id"];?>" />
								<h3>Published consult<span>(such as the purchase process have any questions, welcome to consult us)</span></h3>
								<p class="p_item">
								</p><div style="padding-left:10px;">
									<div><label class="itemtitle">ConsultType:</label></div>
									<div id="consultation_type" style="padding:5px 10px 5px 10px;display:inline;">
                                                                            <?php
                                                                             $consultType = $db->select("select * from consultType where typezt=1 order by typeorder");
                                                                             
                                                                             foreach($consultType as $typeList)
                                                                             {
                                                                                 echo '<input checked class="input_consultation_type" id="input_consultation_type" name="input_consultation_type" value="'.$typeList["id"].'"  type="radio">&nbsp;'.$typeList["typename"].'&nbsp;';
                                                                             }
                                                                            ?>
										 

									</div>
								</div>
					 
								<p class="p_item">
									<label class="itemtitle">Content:</label>
									<textarea id="textarea_consultation_content" class="txta" name="txta"></textarea>
								    <span id="contentError"></span>
                                </p>
								<p class="p_item">
									<label class="itemtitle">Code:</label>
									<input id="verifycode" onfocus="codeF('#imgregister_verifycode')" class="txt" name="verifycode" type="text">
									<img id="imgregister_verifycode" src="show2_files/space.gif"  style="vertical-align: middle; cursor: pointer;" title="" alt=""><span id="codeError"></span>
								</p>
								<p class="p_item p_btn">
									<input class="btn" value="Submit Consult" type="submit">
								</p>
							</form>
						</div>
				</div>
			 
			<h2 class="tabtitle tabtitle_4"><span>Comment</span></h2>
			<h3 class="h3_eachtitle">Comment</h3>
				<div class="tabcont procomments" id="comment">
					
									</div>

 


			<h2 class="tabtitle tabtitle_5"><span>How to order</span></h2>
			  <h3 style="display: none;" class="h3_eachtitle hidden">How to order</h3>
				<div style="display: none;" class="tabcont prohowtobuy hidden">
					<img src="show2_files/howtobuy.png" alt="How to order" usemap="#map_howtobuy" width="740" height="803">
					<map name="map_howtobuy" id="map_howtobuy">
						<area shape="rect" coords="123,155,196,171" href="http://www.mbaobao.com/shipping-cost.html" target="_blank">
						<area shape="rect" coords="284,659,458,673" href="http://www.mbaobao.com/payment-options.html" target="_blank">
						<area shape="rect" coords="182,294,330,308" href="http://www.mbaobao.com/cod.html" target="_blank">
						<area shape="rect" coords="300,746,440,761" href="http://www.westernunion.com/info/selectCountry.asp" target="_blank">
					</map>
				</div>

			<h2 class="tabtitle tabtitle_6"><span class="">Proafterbuy</span></h2>
			  <h3 style="display: none;" class="h3_eachtitle hidden">Proafterbuy</h3>
				<div style="display: none;" class="tabcont proafterbuy hidden">
					<img src="show2_files/afterbuy.png" alt="After-sales service" usemap="#map_afterbuy" width="740" border="0" height="777">
					<map name="map_afterbuy" id="map_afterbuy">
						<area shape="rect" coords="160,598,247,614" href="http://www.mbaobao.com/return-policy.html#return-policy" target="_blank">
					</map>
				</div>

						<div class="div_buybtn div_buybtnr">
			<a id="a_js_ga_quickbuy" class="a_tobuy" style="cursor:pointer;">Buy now</a>
            
			</div>
			
		</div>

	</div>
	</div>
<!-- wrapper over -->

 
 
<script type="text/javascript" src="show2_files/pshow2.js"></script>
 


</div>

<!--footer-start-->    
 
 <?php
        include WEBDIR."/include/foot.php";
?>
 

<script type="text/javascript">
var kucun = <?php echo $productInfo["kucun"];?>;
$(function(){ 
$('.a_addtofavor').click(function(){
  scs();
});

$('.a_tobuy,.a_quickbuy').click(function(){
    if(kucun==0)
        {
        $('#dialogInfo').html('<?php echo $webname;?>Sorry to remind you: you order of goods:<b><?php echo $productInfo["title"];?></b><br/>Insufficient inventory temporarily unable to place an order<br/>You may collect the goods from the temporary waiting for abundant inventory again after purchase, to you<?php echo $webname;?>Sorry, thank you for your support!');
	 messageDialog('<?php echo $webname;?>Prompt order',500,200,'ensure'); 
         return false;   
        }
             if(isNaN($('#input_goods_buy_number_error').val()))
            {
//              $(this).unbind("blur");
 
             $('#input_goods_buy_number_error').html('Purchase quantity, please fill out an integer!');
             $('#input_goods_buy_number').val('1');
         
               return false;
            }
            else
                {
                     $('#input_goods_buy_number_error').html('');
                }
  
        jQuery.ajax({
           url:WEBDIR+"ajax/ajaxCart.php",
           type:"POST",
           data:"id=<?php echo $productInfo["id"];?>&action=add&sum="+$('#input_goods_buy_number').val(),
           success:function(data){
 
               switch(data)
               {
                   case "nologin":
                         LoginDialog();
                       break;
                   case "2":
                        $('#input_goods_buy_number_error').html('Purchase quantity, please fill out an integer!');
                       break;
                   case "4": 
                       $('#dialogInfo').html('<?php echo $webname;?>Sorry to remind you: you order of goods:<?php echo $productInfo["title"];?><br/>Insufficient inventory you need:<span style="color:#f00;font-weight:bold;">'+$('#input_goods_buy_number').val()+'</span> 件<br/>You may collect the goods from the temporary waiting for abundant inventory again after purchase, to you<?php echo $webname;?>Sorry, thank you for your support!');
	                    messageDialog('<?php echo $webname;?>Prompt order',500,200,'ensure');
                       break;
                    case "1":
                        location.href=WEBDIR+"cart.php";
                        break;
                   default:
                        $('#dialogInfo').html('<?php echo $webname;?>Prompts you that the goods have been pulled from the shelves, caused to you<?php echo $webname;?>Sorry, thank you for your support!');
	                messageDialog('<?php echo $webname;?>Prompt order',500,200,'ensure');                      
                       break;
               }
           },
           error:function(){
               $('#dialogInfo').html('The network connection failure, please try again later.');
	       messageDialog('<?php echo $webname;?>Communication error',500,200,'ensure'); 
           }
        });      
        
        
        return false;
});

$('#input_goods_buy_number').blur(function(){
         
        if(isNaN($(this).val()))
            {
//              $(this).unbind("blur");
 
             $('#input_goods_buy_number_error').html('Purchase quantity, please fill out an integer!');
             $(this).val('1');
         
               return false;
            }
            else
                {
                     $('#input_goods_buy_number_error').html('');
                }
        
        if($(this).val()>kucun){
            
            $('#dialogInfo').html('<?php echo $webname;?>Sorry to remind you: you order of goods:<?php echo $productInfo["title"];?><br/>Insufficient inventory you need:<span style="color:#f00;font-weight:bold;">'+$(this).val()+'</span> 件,目前仅剩余库存：'+kucun+'件<br/>You may collect the goods from the temporary waiting for abundant inventory again after purchase, to you<?php echo $webname;?>Sorry, thank you for your support!');
	    messageDialog('<?php echo $webname;?>Prompt order',500,200,'ensure');
            return false;
        }
        
	});


//咨询提交
$('#consultInfo').submit(function(){
    if(!$('#textarea_consultation_content').val())
        {
            $('#contentError').html('Please enter contenterror');
            $('#textarea_consultation_content').select();
            return false;
        }
    if(!$('#verifycode').val())
        {
            $('#codeError').html('please enter cord error');
            $('#verifycode').select();
            return false;
        }    
    // $(this).removeClass("ui-state-error");
    jQuery.ajax({
        url:WEBDIR+"ajax/ajaxProductConsultSava.php",
        type:"POST",
        data:$('#consultInfo').serialize(),
        success:function(data){
  
            switch(data)
            {
             case "nologin":
                  LoginDialog();
             case "2":
             $('#codeError').html('code input errors');
            $('#verifycode').select();
            break;
             case "1":
                 $('#verifycode,#textarea_consultation_content').val('');
                 get_page('zixunList',''+WEBDIR+'ajax/ajaxProductZx.php?id=<?php echo $productInfo["id"];?>');
                  <?php if($webProductZixun=="Y"){
                                 echo "$('#dialogInfo').html('Pre-sale consult submitted to success!<br/>Message information, according to the approved need to pay attention!');";        
                                     }else{
                                 echo "$('#dialogInfo').html('Pre-sale consult submitted to success!<br/>{$webname}Develop without your support!Thank you!');";         
                                     }
                            ?>         
	      messageDialog('<?php echo $webname;?>prompt',500,200,'ensure');
                 break;
             default:
                 $('#verifycode,#textarea_consultation_content').val('');
            $('#dialogInfo').html('Submit failure, please try again later.');
            messageDialog('<?php echo $webname;?>prompt',500,200,'ensure');
            }    
        },
        error:function(){
            $('#dialogInfo').html('Communication failure, please try again later.');
            messageDialog('<?php echo $webname;?>prompt',500,200,'ensure');
        }
    });
	return false;
	})
});


function scs()
{
        jQuery.ajax({
        url:WEBDIR+"ajax/ajaxUserFavorites.php?id=<?php echo $id;?>",
        type:"GET",
        success:function(data){
            switch(data){
                case "1":
            $('#dialogInfo').html('product:<?php echo $productInfo["title"];?><br/>Collection is successful, you can through the member center to check my collection!');
	    messageDialog('<?php echo $webname;?>prompt',500,200,'ensure');
                    break;
                case "2":
            $('#dialogInfo').html('product:<?php echo $productInfo["title"];?><br/>The goods was already in your favorites without collection!');
	    messageDialog('<?php echo $webname;?>prompt',500,200,'ensure');        
                    break;
                case "0":
            $('#dialogInfo').html('product:<?php echo $productInfo["title"];?><br/>Collection of failure, please contact the administrator!');
	    messageDialog('<?php echo $webname;?>prompt',500,200,'ensure');        
                    break;    
                default:
                      LoginDialog('sc','<?php echo $id;?>');
            }
        },
        error:function(){
            $('#dialogInfo').html('Communication failure, please try again later.');
	    messageDialog('<?php echo $webname;?>Communication error',500,200,'ensure',function(){get_page('ajax.php');});
            return false;
        }
        });
}
get_page('zixunList',''+WEBDIR+'ajax/ajaxProductZx.php?id=<?php echo $productInfo["id"];?>');
get_page('comment',''+WEBDIR+'ajax/ajaxProductPl.php?id=<?php echo $productInfo["id"];?>');
</script>


 </html>
<!--content ok-->
<!-- OK -->