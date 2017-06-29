<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>My site - <?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="../css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="../css/user.css" type="text/css">
</head>
<body>
 	 <?php
   include WEBDIR.'/include/top.php';
?>

		 

		 <div class="wrapper">
		<!--会员中心首页-----start-->
		<!--会员中心通栏-->
		    <div class="u_top_gg u_m_bottom">  </div>
		<div class="u_header u_m_bottom">
			<h2>Member Center</h2>
			 
		</div>
		<div class="u_content">
    		<!--会员中心菜单开始-->
              <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
    		<!--会员中心菜单结束-->	
			<div class="u_wrap_c">
				<div class="u_info u_m_bottom">
					<div class="u_info_face">
						<div class="u_face_pic">
						 <img src="../images/maiduo.png" alt="">
												</div>
						<div class="u_face_modify"></div>
					</div>
					<div class="u_info_user">
                                            <h2 class="u_info_u_name"><span>Welcome!</span> &nbsp;&nbsp;<a href="user_Edit.php">Edit Your Profile</a></h2> 
						 
					</div>
					<div class="u_info_account">
						<div class="u_ac_items br_line">
							<h4>Remind:</h4>
								<ul>
									<li>
																				<span style="color:#666666;">Payment(0)</span>
																			</li>
									<li>
																				<span style="color:#666666;">Shipped(0)</span>
																			</li>
									<li>
																				<span style="color:#666666;">Feedback(0)</span>
																			</li>
								</ul>
						</div>
						 
					</div>
				</div>
				<div class="u_rec_list">
					<div class="u_tab">
						<h4><a href="#" class="now" id="isSale">Clearance</a></h4>
						 
						 
					</div>
					<div class="u_tab_panel">
						<div style="display: block;" id="u_rec_sale" class="u_tab_panel_i">
							<ul class="ul_prolist">
								    							  <li>
    								<div class="pic"> <img src="../zs/禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" alt=""></div>
    								<h3><a title="禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" href="" class="a_title">Men's 2011 cotton pants</a><span style="color: #888">My price:</span><strong class="strong_mprice">$228.00</strong></h3>
    							  </li> 
                                    <li>
    								<div class="pic"> <img src="../zs/禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" alt=""></div>
    								<h3><a title="禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" href="" class="a_title">Men's 2011 cotton pants</a><span style="color: #888">My price:</span><strong class="strong_mprice">$228.00</strong></h3>
    							  </li>
                                    <li>
    								<div class="pic"> <img src="../zs/禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" alt=""></div>
    								<h3><a title="禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" href="" class="a_title">Men's 2011 cotton pants</a><span style="color: #888">My price:</span><strong class="strong_mprice">$228.00</strong></h3>
    							  </li>
                                    <li>
    								<div class="pic"> <img src="../zs/禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" alt=""></div>
    								<h3><a title="禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" href="" class="a_title">Men's 2011 cotton pants</a><span style="color: #888">My price:</span><strong class="strong_mprice">$228.00</strong></h3>
    							  </li>
                                    <li>
    								<div class="pic"> <img src="../zs/禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" alt=""></div>
    								<h3><a title="禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" href="" class="a_title">Men's 2011 cotton pants</a><span style="color: #888">My price:</span><strong class="strong_mprice">$228.00</strong></h3>
    							  </li>
                                    <li>
    								<div class="pic"> <img src="../zs/禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" alt=""></div>
    								<h3><a title="禾子韩版男装 2011 新男式纯棉修身小直筒长裤 休闲裤男 卡其.jpg" href="" class="a_title">Men's 2011 cotton pants</a><span style="color: #888">My price:</span><strong class="strong_mprice">$228.00</strong></h3>
    							  </li>
                                    
															</ul>
							<div class="u_more">
								<a href="" target="_blank">More</a>
							</div>
						</div>
			 
					</div>
				</div>
			</div>
			<div class="u_wrap_r">
				<div class="u_box u_m_bottom">
					<div class="u_b_h">
						<h3><span>Hot sale</span></h3>
					</div>
					<div class="u_b_c n_list u_hot_news">
									    			        				    			        				    			        				    			        					<ul>
							    <li><a href="">The links information </a></li>
                                                            <li><a href="">The links information</a></li>
                                                            <li><a href="">The links information</a></li>
                                                            <li><a href="">The links information</a></li>
                                                            <li><a href="">The links information</a></li>
                                                            <li><a href="">The links information</a></li> 
									    					</ul>
						<div class="u_more">
							<a href="http://www.mbaobao.com/activity.html" target="_blank">More</a>
						</div>
					</div>
				</div>
				<div class="u_box u_m_bottom">
					<div class="u_b_h">
						<h3><span>VIP</span></h3>
					</div>
					<div class="u_b_c n_list u_hot_news">
									    			        				    			        				    			        				    			        					<ul>
							    <li><a href="">Member activity information links to promote...</a></li>
                                                            <li><a href="">Member activity information links to promote...</a></li>
                                                            <li><a href="">Member activity information links to promote...</a></li>
                                                            <li><a href="">Member activity information links to promote...</a></li>
                                                            <li><a href="">Member activity information links to promote...</a></li>
                                                            <li><a href="">Member activity information links to promote...</a></li> 
									    					</ul>
						<div class="u_more">
							<a href="http://www.mbaobao.com/activity.html" target="_blank">More</a>
						</div>
					</div>
				</div>
 
				</div>
			</div>
		</div>
	 

	 
		 

		<!-- footer -->
		 
<?php
   include WEBDIR.'/include/foot.php';
?>
 
	<!--content ok--><!-- OK -->

</body>
</html>
