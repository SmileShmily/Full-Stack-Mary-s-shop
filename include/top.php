<!-- top -->
		<div class="top">
			<div id="1021"><div class="wrapper">
<div class="top-fav">
    <a   href="javascript:addFavorite('http://<?php echo $weburl;?>','<?php echo $webname;?>');">Favorites</a>
</div>
<div class="top-tel">
<span class="fl">Hot line: </span><strong class="top-tel-num"><?php echo $webtel;?></strong>
</div>
<div class="top-mobile">
 
</div>
<ul class="top-my-link">
<li class="top-my-mbb">
<a target="_blank" href="">Navigation</a>
<ul class="top-my-nav">
<li>
<a target="_blank" href="">Favorites</a>
</li>
<li>
<a target="_blank" href="">Points</a>
</li>
</ul>
</li>
<li class="top-my-order">
<a target="_blank" href="">Orders</a>
</li>
<li class="top-map">
<a target="_blank" href="">Site map</a>
</li>
</ul>
                                <?php
                                if(!ISLOGIN){
                                ?>
<div   id="dom_top_welcome_unlogin" class="top-login">
<span class="gray">Welcome JieXu'shop!</span>[<a class="a-login" id="login-path" href="<?php echo $webdir;?>user/user_login.php">Login</a>/<a class="a-register" href="<?php echo $webdir;?>user/user_reg.php">Register</a>]</div>
<?php
                                }else{
?><div   id="dom_top_welcome_logined" class="top-login">Hello,<a href="<?php echo $webdir;?>user/user_main.php" id="dom_i_link"><?php echo UID;?></a> [<a href="<?php echo $webdir;?>user/loginOut.php" class="a-logout">Log out</a>]</div>
<?php
                                }
?>
</div>
</div>
		</div>

		<!-- header -->
<div class="header">
 
			 <div class="wrapper clearfix">
<h1 class="header-logo">
<a href="<?php echo $webdir;?>" class="header-logo-a"><img src="<?php echo $webdir;?>Images/sprite_header_footer.png" alt=""></a>
</h1>
 <img src="Images/mbaobao.gif" class="fl" height="1" width="1">
<div class="header-search">
    <form action="<?php echo $webdir?>product/" class="header-search-form">
<input maxlength="50" autocomplete="off" value="<?php echo $sk;?>" class="header-search-input" name="k" id="input_goods_search_keyword" type="text"><input value="Search" class="header-search-but" type="submit">
</form>
<div class="hot-keywords">
<strong>Hot search:</strong><a href=''>Jie Xu</a> <a href=''>shop</a>
</div>
</div>
</div><div class="main-nav">
<ul class="main-nav-l">
<li class="m-n-i">
    <a href="<?php echo $webdir;?>" class="main-nav-a main-nav-1">Home</a>
</li>
<li class="m-n-i">
    <a href="<?php echo $webdir;?>product/list.php?id=1" class="main-nav-a main-nav-2">Women</a>
<div class="sub-nav">
<div class="sub-nav-wrap">
    <?php
      $menu = $action->getProductType(" and tid='1'");
      foreach($menu as $rows){
       echo "<dl>";
        echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
        echo "<dd>";
           $menus=$action->getProductType(" and tid='{$rows["id"]}'");
           foreach($menus as $rows){
               echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
           }
        echo "</d>";
       echo "</dl>";
      }
    ?>
</div>
<div class="sub-link">
<a rel="nofollow" target="_blank" href="">Hot</a><a rel="nofollow" target="_blank" href="">Clearance</a>
<a href="">Recommend</a>
</div>
</div>
</li>
<li class="m-n-i">
<a href="<?php echo $webdir;?>product/list.php?id=2" class="main-nav-a main-nav-3">Men's</a>
 <div class="sub-nav">
<div class="sub-nav-wrap">
     <?php
      $menu = $action->getProductType(" and tid='2'");
      foreach($menu as $rows){
       echo "<dl>";
        echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
        echo "<dd>";
           $menus=$action->getProductType(" and tid='{$rows["id"]}'");
           foreach($menus as $rows){
               echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
           }
        echo "</d>";
       echo "</dl>";
      }
    ?>
 
</div>
<div class="sub-link">
<a rel="nofollow" target="_blank" href="">Hot</a><a rel="nofollow" target="_blank" href="">Clearance</a>
<a href="">Recommend</a>
</div>
</div>
</li>
<li class="m-n-i">
<a href="<?php echo $webdir;?>product/list.php?id=3" class="main-nav-a main-nav-4">Shoe</a>
 <div class="sub-nav">
<div class="sub-nav-wrap">
    <?php
      $menu = $action->getProductType(" and tid='3'");
      foreach($menu as $rows){
       echo "<dl>";
        echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
        echo "<dd>";
           $menus=$action->getProductType(" and tid='{$rows["id"]}'");
           foreach($menus as $rows){
               echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
           }
        echo "</d>";
       echo "</dl>";
      }
    ?>
 
</div>
<div class="sub-link">
<a rel="nofollow" target="_blank" href="">Hot</a><a rel="nofollow" target="_blank" href="">Clearance</a>
<a href="">Recommend</a>
</div>
</div>
</li>
<li class="m-n-i">
<a href="<?php echo $webdir;?>product/list.php?id=4" class="main-nav-a main-nav-6">Fashion</a>
<div class="sub-nav">
<div class="sub-nav-wrap">
    <?php
      $menu = $action->getProductType(" and tid='4'");
      foreach($menu as $rows){
       echo "<dl>";
        echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
        echo "<dd>";
           $menus=$action->getProductType(" and tid='{$rows["id"]}'");
           foreach($menus as $rows){
               echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
           }
        echo "</d>";
       echo "</dl>";
      }
    ?>
 
</div>
<div class="sub-link">
<a rel="nofollow" target="_blank" href="">Hot</a><a rel="nofollow" target="_blank" href="">Clearance</a>
<a href="">Recommend</a>
</div>
</div>
</li>
<li class="m-n-i">
<a href="<?php echo $webdir;?>product/list.php?id=5" class="main-nav-a main-nav-7">Home</a>
<div class="sub-nav sub-nav-r1">
<div class="sub-nav-wrap">
    <?php
      $menu = $action->getProductType(" and tid='5'");
      foreach($menu as $rows){
       echo "<dl>";
        echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
        echo "<dd>";
           $menus=$action->getProductType(" and tid='{$rows["id"]}'");
           foreach($menus as $rows){
               echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
           }
        echo "</d>";
       echo "</dl>";
      }
    ?>
 
</div>
<div class="sub-link">
<a rel="nofollow" target="_blank" href="">Hot</a><a rel="nofollow" target="_blank" href="">Clearance</a>
<a href="">Recommend</a>
</div>
</div>
</li>
<li class="m-n-i">
<a href="<?php echo $webdir;?>product/list.php?id=6" class="main-nav-a main-nav-8">Electrical</a>
<div class="sub-nav sub-nav-r2">
<div class="sub-nav-wrap">
    <?php
      $menu = $action->getProductType(" and tid='6'");
      foreach($menu as $rows){
       echo "<dl>";
        echo "<dt><a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a></dt>";
        echo "<dd>";
           $menus=$action->getProductType(" and tid='{$rows["id"]}'");
           foreach($menus as $rows){
               echo "<a href='{$webdir}product/list.php?id={$rows["id"]}'>{$rows["typename"]}</a>";
           }
        echo "</d>";
       echo "</dl>";
      }
    ?>
 
</div>
<div class="sub-link">
<a rel="nofollow" target="_blank" href="">Hot</a><a rel="nofollow" target="_blank" href="">Clearance</a>
<a href="">Recommend</a>
</div>
</div>
</li>
</ul>
<ul class="main-nav-r">
<li class="m-n-i">
<a href="" class="main-nav-a2 main-nav-9">Hot</a>
</li>
<li class="m-n-i">
<a href="" class="main-nav-a2 main-nav-10">Clearance</a>
</li>
<li class="m-n-i">
<a href="" class="main-nav-a2 main-nav-12">Recommend</a>
</li>
<li class="m-n-i">
<a href="" class="main-nav-a2 main-nav-13">Jie Xu</a>
</li>
<li class="m-n-i">
<a href="" class="main-nav-a2 main-nav-14">JieXu Shop</a>
</li>
</ul>
</div><div class="header-bar">
<div class="top-notice">
<span>Announcement:</span>The latest published a notice shows to be here
</div>
<div class="head-quickbuy">
    <a target="_blank" href="<?php echo $webdir?>cart.php" class="head-quickbuy-a">Cart Subtotal: <strong class="head-quickbuy-num" id="js_cart_goods_number"></strong> item</a>
<div class="head-quickbuy-detail" id="top_cart_goods_list"></div>
</div>
</div>
 
</div>