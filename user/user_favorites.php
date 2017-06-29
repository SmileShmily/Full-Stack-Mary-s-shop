<?php
require '../public/init.php';
$userinfo  = new UserInfo();
$zt=$userinfo->isok();

$receive= new receive();
$tj=" and username='".UID."' ";
$info= $receive->receiveList($tj);

 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Shipping address -<?php echo $webname;?></title>
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/base_v4.css" type="text/css">
<link rel="stylesheet" rev="stylesheet" type="text/css"  href="<?php echo $webdir;?>css/main.css" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo $webdir;?>css/user_reg.css" type="text/css">
</head>
<body>
  	 <?php
   include WEBDIR.'/include/top.php';
?>

	    <div id="container">
		   <!-- member center start -->
		   <div class="u_content">
		     <div class="u_header u_m_bottom">
		       <h2>JieXu shop</h2>
	         </div>
		     <div class="member">
		           			     		<!--会员中心菜单开始-->
              <?php
              include WEBDIR."/include/userLeft.php";
			  ?>
    		<!--会员中心菜单结束-->	
		       <div class="main">
		         <h2 class="title">Favorites</h2>
		         <p style="text-align:right;"><img src="shouhuo_files/li_02.gif" alt="" />&nbsp;&nbsp;</p>
		         <div class="member_box">
		           <table>
		             <thead>
		               <tr>
		                 <td width="8%">Pid</td>
		                 <td width="43%">Price</td>
		                 <td width="7%">Pstatus</td>
		                 <td width="15%">Username</td>
		                 <td width="15%">Addtime</td>
		                 <td width="12%">Operation</td>
	                   </tr>
	                 </thead>
		             <tbody>
                                 <?php
                                 foreach($info as $rows)
                                 {
                                 ?>
		               <tr>
		                 <td><?php echo $rows["shren"];?></td>
		                 <td align="left"><?php echo $rows["shdizhi"];?></td>
		                 <td><?php echo $rows["youbian"];?></td>
		                 <td><?php echo $rows["tel"];?></td>
		                 <td><?php echo $rows["mobile"];?></td>
                                 <td><a href="user_favoritesSava.php?action=del&id=<?php echo $rows["id"];?>">Delete</a></td>
	                   </tr>
                                 <?php
                                 
                                 }
                                 ?>
	                 </tbody>
	               </table>
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
 
	<!--content ok--><!-- OK -->

</body>
</html>
