<?php
require 'public/init.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $webtitle;?></title>
<link rel="stylesheet" rev="stylesheet" href="css/base_v4.css" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<meta content="<?php echo $webkey;?>" name="Keywords" /> 
<meta content="<?php echo $webDescription;?>" name="Description" /> 
</head>
<body>
<?php
   include WEBDIR.'/include/top.php';
?>

		

		<div class="wrapper m-bottom" id="1018"><div style="width:960px;height:70px;">
<a target="_blank" href=""><img alt="" src="Images/banner_s.jpg"></a>
</div>
</div>

		<!-- ���� -->
		<div class="wrapper m-bottom lazybox mbb-survey">
			 
			<div id="1001"><div class="banner-focus" id="js-index-banner">
<div class="focus-title">
<span title="������ 99/199/299Ԫ3��" class="span-focus"><b>1</b><span class="span-bg"></span></span><span title=""��"Ů���°���" class="span-focus span-focus-now"><b>2</b><span class="span-bg"></span></span><span title="����˹Ʒ��������Ʒ �������ּ���������Ь" class="span-focus"><b>3</b><span class="span-bg"></span></span><span title="�а����� һ���һ��" class="span-focus"><b>4</b><span class="span-bg"></span></span> 
</div>
<div class="focusbanner" style="visibility: hidden;">
<a target="_blank" title="������ 99/199/299Ԫ3��" href="http://www.houdunwang.com"><img src="Images/event_01.jpg" height="338" width="698"></a>
</div>
<div class="focusbanner" style="visibility: visible;">
<a target="_blank" title=""��"Ů���°���" href="http://www.houdunwang.com"><img alt=""��"Ů���°���" src="Images/lm_06.jpg" height="338" width="698"></a>
</div>
<div class="focusbanner" style="visibility: hidden;">
<a target="_blank" title="����˹Ʒ��������Ʒ �������ּ���������Ь" href="http://www.houdunwang.com"><img alt="����˹Ʒ��������Ʒ �������ּ���������Ь" src="Images/event_fbs_01.jpg" height="338" width="698"></a>
</div>
<div class="focusbanner" style="visibility: hidden;">
<a target="_blank" title="�а����� һ���һ��" href="http://www.houdunwang.com"><img alt="�а����� һ���һ��" src="Images/geb_02.jpg" height="338" width="698"></a>
</div>
 
</div>
</div>
			<div id="1002"><div class="news-tab m-bottom" id="news-tab">
<h2 class="news-tab-h2 tabnow">
<a href="#" class="news-tab-a">Popular Article</a>
</h2>
<div style="visibility: visible;" class="news-box">
<ul class="ul-list-s2">
    <?php
    $list=$action->getArticle(' and typeid=20 ');
    foreach($list as $rows){
        echo "<li><a href=\"article/show.php?id={$rows["id"]}\" target=\"_blank\" class=\"ul-list-s1-a\">".strLeft($rows["title"],15,'...')."</a></li>";
    }
    ?>
</ul>
</div>
<h2 class="news-tab-h2 news-tab-2">
<a href="#" class="news-tab-a">New Article</a>
</h2>
<div class="news-box" style="visibility: hidden">
<ul class="ul-list-s2">
    <?php
    $list=$action->getArticle(' and typeid=21 ');
    foreach($list as $rows){
        echo "<li><a href=\"article/show.php?id={$rows["id"]}\" target=\"_blank\" class=\"ul-list-s1-a\">".strLeft($rows["title"],15,'...')."</a></li>";
    }
    ?>
</ul>
</div>
</div><div class="gg-2 m-bottom">
<a target="_blank" href=""><img src="Images/header_1.png" title="Խ��Խ���� ʱ����ǽ�Ǯ" height="88" width="248"></a>
</div><div class="gg-2">
<a target="_blank" href=""><img src="Images/header_2.png" title="����8��" height="88" width="248"></a>
</div>
</div>
		</div>
		<!-- ���ŷ��� ���ŷ����Ҳ� -->
 

		<!-- ���1 -->
		<div class="gg-4 lazybox" id="1019"><a title="����Ʒ������" target="_blank" href=""><img src2="ad/2.jpg" src="Images/blank.png"></a>
</div>

 
		<!-- 2F -->
		<div class="wrapper m-bottom" id="1017"><div class="h-floor lazybox" id="hotbrand">
<div class="floor-title">
<h2>
<a target="_blank" class="f-t-pic" href="">Hot Brand</a>
</h2>
<span class="f-t-plus"><a target="_blank" class="red" href="">More
									&gt;&gt;
								</a></span>
</div>
<div class="floor-box">
<div class="brand-list">
<div class="brand-wrap">
<?php
$ppInfo=$action->getPP(' and recommend=\'1\'');
foreach($ppInfo as $rows)
{
    echo "<a class=\"b-item exc\" href='{$webdir}product/?ppid={$rows["id"]}'><img height=\"48\" width=\"111\" src='".str_replace("../","",$rows["picurl"])."' /><em>{$rows["ppname"]}</em></a>";
}
?>

</div>
</div>
</div>
</div>
</div>
		 
		 
		 
		<div class="wrapper m-bottom lazybox" id="1008" goodspicsize="145"><div class="side-bb-2">
<a target="_blank" href=""><img src2="ad/1.jpg" src="Images/blank.png" title="�������� ��Ů�ɰ�" height="452" width="280"></a>
</div><div class="bb-list-home">
<ul class="h-list h-list-ul">
 <?php
 $productList=$action->getProduct(1,8);
 
 foreach($productList as $rows)
 {
     echo "<li><div class=\"pic\">";
     echo "<A href='{$webdir}product/show.php?id={$rows["id"]}' target='_blank'><img src2='".str_replace("../","",$rows["picurl"])."' src='Images/blank.png' title='' height='145' width='145' /></a></div>";
     echo "<h3 class=\"bb-info\"><a target=\"_blank\" class=\"bb-info-a\" href='{$webdir}product/show.php?id={$rows["id"]}'>".strLeft($rows["title"],20,"...")."</a><span class=\"mbb-p-title-a\">My Price:</span><strong class=\"mbb-price\">$ {$rows["price"]}</strong><s>$ {$rows["yprice"]}</s></h3></li>";
 }
 ?>
</ul>
</div>
</div>

		<!-- ���2 -->
		<div class="gg-4 lazybox" id="1020"><a title="��Ʒ�������ͻ�" target="_blank" href="ad2"><img src2="ad/2.jpg" src="Images/blank.png"></a>
</div>

		 

	 
 

		<!-- 6F -->
		<div class="wrapper m-bottom lazybox" id="1012"><div class="h-floor" id="bbdigital">
<div class="floor-title">
<h2>
<a target="_blank" class="f-t-pic" rel="nofollow">Electronics</a>
</h2>
 
</div>
 
<ul class="h-list h-list-ul-2">
  <?php
 $productList=$action->getProduct(2,5);
 
 foreach($productList as $rows)
 {
     echo "<li><div class=\"pic\">";
     echo "<A href='{$webdir}product/show.php?id={$rows["id"]}' target='_blank'><img src2='".str_replace("../","",$rows["picurl"])."' src='Images/blank.png' title='' height='174' width='174' /></a></div>";
     echo "<h3 class=\"bb-info\"><a target=\"_blank\" class=\"bb-info-a\" href='{$webdir}product/show.php?id={$rows["id"]}'>".strLeft($rows["title"],20,"...")."</a><span class=\"mbb-p-title-a\">My Price:</span><strong class=\"mbb-price\">$ {$rows["price"]}</strong><s>$ {$rows["yprice"]}</s></h3></li>";
 }
 ?>
 

</ul>
</div>
</div>

		<!-- �����ؼ� �������� -->
		<div class="wrapper m-bottom">
			<div id="1013"><div id="bbsale">
<div class="h-floor">
<div class="floor-title">
<h2>
<a target="_blank" class="f-t-pic">Clearance</a>
</h2>
</div>
</div>
<div class="floor-box sale-list">
<ul class="h-list h-list-ul-3 lazybox">
  <?php
 $productList=$action->getProduct(3,6);
 foreach($productList as $rows)
 {
     echo "<li><div class=\"pic\">";
     echo "<A href='{$webdir}product/show.php?id={$rows["id"]}' target='_blank'><img src2='".str_replace("../","",$rows["picurl"])."' src='Images/blank.png' title='' height='174' width='174' /></a></div>";
     echo "<h3 class=\"bb-info\"><a target=\"_blank\" class=\"bb-info-a\" href='{$webdir}product/show.php?id={$rows["id"]}'>".strLeft($rows["title"],20,"...")."</a><span class=\"mbb-p-title-a\">My price:</span><strong class=\"mbb-price\">$ {$rows["price"]}</strong><s>$ {$rows["yprice"]}</s></h3></li>";
 }
 ?>

</ul>
</div>
</div>
</div>
			<div id="1014"><div id="hotcomment">
<div class="h-floor">
<div class="floor-title">
<h2>
<a target="_blank" class="f-t-pic" rel="nofollow">Top review</a>
</h2>
</div>
</div>
<div class="floor-box comment-list lazybox">
<div class="item">
<div class="pic">
<a target="_blank" rel="nofollow" href=""><img src2="zs/���ޣ���װ�¿��װ��ʿ�г���ˮϴ���������ſ۷������.jpg" src="Images/blank.png" title="���ޣ���װ�¿��װ��ʿ�г���ˮϴ���������ſ۷������" class="comm-img" height="80" width="80"></a>
</div>
<div class="con">
<p class="info">
<strong class="fl">masuk</strong><span class="star star-5"></span>
</p>
<p class="c-con">
<a target="_blank" class="gray" rel="nofollow" href="">Very good, with no color photos, good quality!!!!!!!!!!!</a>
</p>
</div>
</div>
<div class="item">
<div class="pic">
<a target="_blank" rel="nofollow" href=""><img src2="zs/�¿�2011��װŮװ�Ӵ���ӷ�����MY595��˿������������������ȹ.jpg" src="Images/blank.png" title="���ޣ���װ�¿��װ��ʿ�г���ˮϴ���������ſ۷������" class="comm-img" height="80" width="80"></a>
</div>
<div class="con">
<p class="info">
<strong class="fl">80470</strong><span class="star star-4"></span>
</p>
<p class="c-con">
<a target="_blank" class="gray" rel="nofollow" href="">Very good very good very beautiful, just like pictures, and both sides are not the same..Side very atmosphere, the other is...</a>
</p>
</div>
</div>
<div class="item">
<div class="pic">
<a target="_blank" rel="nofollow" href=""><img src2="zs/�¿Ʒ������װ ������� ������ʿ���� �������� ʱ������.jpg" src="Images/blank.png" title="[����]�ഺ����ϵ��ţƤ����� ���ɫ" class="comm-img" height="80" width="80"></a>
</div>
<div class="con">
<p class="info">
<strong class="fl">mengx</strong><span class="star star-5"></span>
</p>
<p class="c-con">
<a target="_blank" class="gray" rel="nofollow" href="">Finally can be evaluated, the quality is super good, delivery speed so fast can be received by the next day...</a>
</p>
</div>
</div>
<div class="item">
<div class="pic">
<a target="_blank" rel="nofollow" href=""><img src2="zs/��Ȼ����Ůװ2011��װ�¿�Ӵ���2088�����������������������.jpg" src="Images/blank.png" title="�����桻  �ۺ�ɫ  б���" class="comm-img" height="80" width="80"></a>
</div>
<div class="con">
<p class="info">
<strong class="fl">jill.</strong><span class="star star-5"></span>
</p>
<p class="c-con">
<a target="_blank" class="gray" rel="nofollow" href="">Quality is very good, cloth is very good, do manual work is also very neat, zip zip are very delicate.Small pocket a lot...</a>
</p>
</div>
</div>
<div class="item">
<div class="pic">
<a target="_blank" rel="nofollow" href=""><img src2="zs/��mm 2011�¿� �Ӵ���Ůװ ������˿�������� ��Ʒ��T�� ��װ.jpg" src="Images/blank.png" title="[��ɭ]��ҹ����ϵ��ʱ��ţƤ����/б��� ����ɫ" class="comm-img" height="80" width="80"></a>
</div>
<div class="con">
<p class="info">
<strong class="fl">luozh</strong><span class="star star-5"></span>
</p>
<p class="c-con">
<a target="_blank" class="gray" rel="nofollow" href="">The quality is very good, I very satisfied, then buy again.</a>
</p>
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
