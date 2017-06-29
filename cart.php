<?php
require "public/init.php";
 

$cart = new cart();
$action=@$_GET["action"];

if($action=="up")
{
    $id=$_GET["id"];
    $sum=$_GET["sum"];
    if($sum==0){
        $cart->delCart($id);
        webAlter("Remove product successfully",'cart.php');
    }
    $cart->addCart($id, $sum);
    
    webAlter("Update successful",'cart.php');
}

$cartList=$cart->cartInfo();

 


if(!ISLOGIN)
{
    webAlter("Please login first", "user/user_login.php");
    exit;
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Shopping cart - <?php echo $webtitle;?></title>
<link rel="stylesheet" rev="stylesheet" href="css/cart_v1.css" type="text/css"/>
</head>
<body>
<div class="wrapper">
  <!-- start header -->
  <div class="header">
 
    <h1>JieXucart</h1>
    <img src="images/logo.gif" class="logo" alt="JieXu" /> 
    <img src="cart_null_files/mbaobao.gif" height="1" width="1" /> <a href="" target="_blank">Help</a> </div>
  <!-- end header -->
</div>
<div class="wrapper">
  <!-- start information -->
  <div class="info clearfix">
    <div class="title">
      <h2> <span class="sprite mycart">My cart</span> </h2>
      <div style="clear:both;padding: 0px 15px 15px 15px;overflow:hidden;zoom:1"><span style="float:left;color:#c00;">Note: please do not hesitate to order purchase, commodity prices will be subject to orders submitted prices.</span>
        <div style="float:right;"> <span> </span></div>
      </div>
    </div>
  </div>
  <!-- end information -->
  <!-- start item grid -->
  <div class="items clearfix">
    <table class="grid" cellspacing="0">
      <thead>
        <tr>
          <td width="60">&nbsp;</td>
          <td style="text-align: left; padding: 0pt 0pt 0pt 5px;" width="*">Product name</td>
          <td width="90">MSRP</td>
          <td width="100">SalePrice</td>
          <td width="70">Total</td>
          <td width="80">Num</td>
 
          <td width="60">Delete</td>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($cartList))
          {
              foreach($cartList as $k=>$v)
              {
          ?>
      <tr>
          <td><a href="product/show.php?id=<?php echo $k;?>" alt="" target="_blank"><img src="<?php echo str_replace("../", "",$v["picurl"])?>" alt="" class="item" /></a></td>
          <td class="tal"><ul>
            <li><a href="product/show.php?id=<?php echo $k;?>" target="_blank"><?php echo $v["title"]?></a></li>
            <li><?php echo $v["numbers"]?></li>
          </ul></td>
          <td> $<?php echo $v["yPrice"]?> </td>
          <td><div class="price">$<?php echo $v["unitPrice"]?></div></td>
          <td>$<?php echo $v["Price"]?></td>
          
          <td><div class="quantity"> <a href='?action=up&id=<?php echo $k;?>&sum=<?php echo $v["total"]-1;?>' class="reduce sprite icon_reduce" alt="Minus one">Minus one</a>
    <input name="buy_quantity" ref="do/items/add/1206014002/1" class="input_quantity" value="<?php echo $v["total"]?>" type="text" />
    <a href='?action=up&id=<?php echo $k;?>&sum=<?php echo $v["total"]+1;?>' class="subjoin sprite icon_subjoin" alt="plus one">plus one</a></div></td>
          <td><a onclick="del(<?php echo $k;?>)">Delete</a></td>
        </tr>

          <?php
              }
              ?>
                      <tr>
          <td colspan="2" class="info_left"> 
           </td>
          <td colspan="6" class="info_right"> 
            <p> <span>Total(do not include shipping) :<span class="price f14">$<?php echo $_SESSION["cartPrice"]?></span></span> </p></td>
        </tr>
              <?php
              
          } else{
          ?>
        <tr>
          <td colspan="8"><p class="empty_item"> You haven't add to cart!</p></td>
        </tr>
         <?php
          }
         ?>
      </tbody>
    </table>
  </div>
  <!-- end item grid -->
  <!-- start action button -->
  <div class="buttons clearfix"> <a class="continue sprite" href="">Continue shopping</a> <?php if(!empty($cartList)) {?> <a class="checkout sprite" href="orderCart.php">Payment</a><?php }?></div>
  <!-- end action button -->
</div>
<div class="wrapper">
  <div class="copyright"><?php echo $webcopy;?></div>
</div>
    <script src="Images/jquery.js" type="text/javascript"></script> 
    <script>
        function del(id)
        {
            jQuery.ajax({
                url:"ajax/ajaxDelcart.php",
                type:"POST",
                data:"id="+id,
                success:function(data){
                    if(data=="1")
                        {
                            location.href="cart.php";
                        }
                },
                error:function(){
                    alert("error");
                }
            })
        }
 
    </script>
</body>
</html>
