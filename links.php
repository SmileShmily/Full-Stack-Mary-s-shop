<?php
require 'public/init.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Links - <?php echo $webtitle;?></title>
<link rel="stylesheet" rev="stylesheet" href="css/base_v4.css" type="text/css"/>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="css/aboutus.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php
   include WEBDIR.'/include/top.php';
?>	
		 
		<div class="wrapper">
		  <!-- about_main start -->
		  <div class="about_main">
		    <div class="left_box">
		      <h2 class="h2_about_menu_title">About us</h2>
		      <div class="about_menu">
		        <ul class="ul_about_menu">
		           <?php
                            $list=$action->getArticle(' and typeid=9 ',' order by id ');
    foreach($list as $rows){
 
 
        echo "<li><a href=\"{$webdir}about/?id={$rows["id"]}\">{$rows["title"]}</a></li>";
 
    
    }
                            ?>
		          <li class="now"><a>Links</a></li>
	            </ul>
	          </div>
	        </div>
		    <div class="right_box">
		      <h2 class="h2_rb_about_us">Links</h2>
		      <div class="right_box_cont rb_links_cont">
		        <div class="pic_links">
		          <h3 class="h3_links_title">Image Link</h3>
                  
		          <ul class="ul_pic_links">
                              <?php
                                $links=$action->getLinks(" and styleid=1");
                              foreach($links as $rows)
                              {
                                   
                                  echo "<li><A href=\"{$rows["weburl"]}\" target=\"_blank\"><img src=\"{$rows["logourl"]}\" alt=\"{$rows["webname"]}\"  height=\"30\" width=\"88\"/></a></li>";
                              }
                              ?>
		            
		            
	              </ul>
	            </div>
		        <div class="txt_links">
		          <h3 class="h3_links_title">Text Link</h3>
		          <ul class="ul_pic_links">
		         <?php
                                $links=$action->getLinks(" and styleid=2");
                              foreach($links as $rows)
                              {
                                  
                                  echo "<li><A href=\"{$rows["weburl"]}\" target=\"_blank\">{$rows["webname"]}</a></li>";
                              }
                              ?>
		             
	              </ul>
	            </div>
		        <div class="link_desc">
		          <h3 class="h3_links_title">LinksInfo</h3>
		          <div class="link_desc_cont">  
		  
		            <ul class="ul_link_info">
		              <li> &middot;LOGO (88 & times; 30 pixels) or to link text, links to the specified URL, and other information you think necessary.</li>
		              <li> &middot;And in the proper place your website, please join the following HTML link code (display results such as legend for 88 & times; 30 pixels size Logo mark)
		                <textarea name="textarea" cols="20" rows="4" style="width: 700px;" onclick="this.select()">&lt;a
 href=&quot;http://www.houdunwnag.com&quot;&gt;&lt;img 
src=&quot;images/logoLinks.gif&quot; border=&quot;0&quot; 
alt=&quot;Mary Xu-Jie Xu shop!&quot;/&gt;&lt;/a&gt;</textarea>
	                  </li>
	                </ul>
		            <div class="example">
		              <p class="pic_example"><strong>Legend:</strong><img src="images/logoLinks.gif" alt="" height="30" width="88" /></p>
		              <p><strong>Text link:</strong><br />
		                Text link:JieXu (https://github.com/7jx)</p>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
		  <!-- about_main end -->
</div>
		<!-- footer -->
   
  <?php
   include WEBDIR.'/include/foot.php';
?>
	<!--content ok--><!-- OK -->

</body>
</html>
