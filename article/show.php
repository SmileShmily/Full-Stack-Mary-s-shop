<?php
require '../public/init.php'; 
$id=$_GET["id"];

$info=$db->select("select * from article inner join articleType on article.typeid=articleType.id  where article.id='$id' and articleType.leixing='Article̬'",1);

if(empty($info))
{
    weberror();
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $info["title"]." - ".$webtitle;?></title>
<link rel="stylesheet" rev="stylesheet" href="../css/base_v4.css" type="text/css"/>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../css/aboutus.css" rel="stylesheet" type="text/css" />
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
    
        $articleType=$action->getArticleType(' and leixing=\'Article̬\'','order by id');
    foreach($articleType as $rows){ 
        if($info["typeid"]==$rows["id"])
        {
        echo "<li class='now'><a href=\"{$webdir}article/?id={$rows["id"]}\">{$rows["typename"]}</a></li>";
    }else{
        echo "<li><a href=\"{$webdir}article/?id={$rows["id"]}\">{$rows["typename"]}</a></li>";
    }
    
    }
    ?>     
                          
		           
		          
	            </ul>
	          </div>
	        </div>
		    <div class="right_box">
		      <h2 class="h2_rb_about_us"><?php echo $info["title"];?></h2>
		      <div class="right_box_cont">
		         <?php
                         echo $info["content"];
                         ?>
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
