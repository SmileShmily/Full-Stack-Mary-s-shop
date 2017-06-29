<div class="footer">

			<div id="1023"><div class="footer-wrap">
<div class="bottom-link">
<div class="item b-l-1">
<h4>About me</h4>
<ul>
<?php
    $list=$action->getArticle(' and typeid=9 ',' order by id ');
    foreach($list as $rows){
        echo "<li><a href=\"{$webdir}about/?id={$rows["id"]}\" target=\"_blank\">{$rows["title"]}</a></li>";
    }

?>
</ul>
</div>
    
    <?php
    
        $articleType=$action->getArticleType(' and leixing=\'Help\'','order by id');
        $i=1;
        foreach($articleType as $rows)
        {   $i++;
           
            echo "<div class=\"item b-l-$i\">";
            echo "<h4>{$rows["typename"]}</h4>";
            echo "<ul>";
                  $list=$action->getArticle(" and typeid='{$rows["id"]}'",' order by id ');
            foreach($list as $rows){
                 echo "<li><a href=\"{$webdir}help/?id={$rows["id"]}\">{$rows["title"]}</a></li>";
            }
            echo "</ul>";
            echo "</div>";
        }
    ?>    
 
<div class="item b-l-6">
<h4>PHP</h4>
<ul>
<li>
<a target="_blank" href="http://www.houdunwang.com/gaoxin.html">Class</a>
</li>
<li>
<a target="_blank" href="http://www.houdunwang.com/baoming.html">Sign up</a>
</li>
<li>
<a target="_blank" href="http://www.houdunwang.com/wenda.html">Question</a>
</li>
<li>
    <a target="_blank" href="<?php echo $webdir;?>links.php">Links</a>
</li>
</ul>
</div>
</div>
<div class="hot-tel-bottom">
<h2><?php echo $webtel;?></h2>
<a class="gbook-a" target="_blank" href="<?php echo $webdir;?>guest/">feedback</a>
</div>
</div><div class="special-service">
<h2 class="spe-ser-title">Private Services</h2>
<ul class="spe-ser-con">
<li>
<a target="_blank" href="" class="s-ser-1">About me</a>
</li>
<li>
<a target="_blank" href="" class="s-ser-2">About me</a>
</li>
<li>
<a target="_blank" href="" class="s-ser-3">About me</a>
</li>
<li>
<a target="_blank" href="" class="s-ser-4">About me</a>
</li>
<li>
<a target="_blank" href="" class="s-ser-5">About me</a>
</li>
</ul>
</div><div class="copyright">
						All:About me ICP 10027771-1  Reserved, https://github.com/7jx Services 2014-2015 
</div><ul class="ul-honor lazybox">
<li>
<a title="Pay trust business" target="_blank" rel="nofollow" href="http://trust.alipay.com/"><img alt="JIe Xu" src2="<?php echo $webdir;?>images/footer_logo_1.png" src="Images/blank.png" height="40" width="93"></a>
</li>
<li>
<a title="Credit union website" target="_blank" rel="nofollow" href="http://zjnet.zjaic.gov.cn/"><img alt="Jie Xu" src2="<?php echo $webdir;?>Images/footer_logo_2.png" src="Images/blank.png" height="40" width="114"></a>
</li>
<li>
<a title="Network economy supervision " target="_blank" rel="nofollow" href="http://www.idinfo.cn/SignHandle?userID=3304000000032097"><img alt="Jie Xu" src2="<?php echo $webdir;?>images/footer_logo_3.png" src="<?php echo $webdir;?>Images/blank.png" height="65" width="66"></a>
</li>
<li>
<a title="" target="_blank" rel="nofollow" href="http://315.nanhuaic.cn/index.action"><img alt="" src2="<?php echo $webdir;?>images/footer_logo_4.png" src="<?php echo $webdir;?>Images/blank.png" height="65" width="102"></a>
</li>
</ul>
</div>
		</div>	
<script src="<?php echo $webdir;?>Images/jquery.js" type="text/javascript"> </script>
<script src="<?php echo $webdir;?>Images/index_v5.js" type="text/javascript"> </script>