<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';

$db= new DbMysql();

$sql="select product.title,assess.id,assess.pid,assess.issh,assess.istop,assess.recommend,assess.pinglun,assess.usernameshow,assess.ip,assess.addtime from assess inner join product on assess.pid=product.id ";
$parm=" where 1 "; //条件语句

//判断是否审核
$issh=@$_GET["issh"];

if($issh!="")
{
    $parm.=" and assess.issh='$issh' ";
}

//判断是否置顶
$istop=@$_GET["istop"];
if($istop!="")
{
    $parm.=" and assess.istop='$istop' ";
}


//判断是否推荐
$recommend=@$_GET["recommend"];
if($recommend!="")
{
    $parm.=" and assess.recommend='$recommend' ";
}


//判断搜索
$key=@$_GET["key"];
$ziduan=@$_GET["ziduan"];
if($key!="")
{
    $parm.=" and assess.$ziduan like '%$key%' ";
}


//判断信息是否管理员输入
$isadmin=@$_GET["isadmin"];

 

if($isadmin=="ok")
{
    $parm.=" and assess.ip='admin' ";
}
 
$sql.=$parm;
$sql.=" order by assess.id desc ";




//echo $sql;


$db->sql($sql);

$infocount=$db->affected(); //信息总数量
$pagesize=20;

$page = new page($infocount, $pagesize);


$sql.=$page->limit();
$result=$db->select($sql);

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Assess</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F8F9FA;
}
-->
</style>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<script>
 function goinfo(ziduan,id)
 {
	 //alert('欢迎收看后盾网视频教程');
	 document.updateinfo.ziduan.value=ziduan;
	 document.updateinfo.zt.value=id;
	 document.updateinfo.action="assess_update.php";
	 document.updateinfo.submit();
 }
 
 function test()
 {
	 if(document.soinfo.key.value=='')
	 {
		 alert('please enter search keyword');
		 return false;
	 }
  return true;
 }
</script>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" height="29" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td width="935" height="29" valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">Assess</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td height="71" valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
<div>
<!---->
                  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="left_txt">location: AssessList</td>
          </tr>
          <tr>
            <td height="20">
<table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td><div class="add"><A href='assess_add.php'><img src="images/add.gif" width="16" height="16" /> Add comment</a></div></td>
                <td width="150" align="right">
 </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><div style="line-height:25px;font-size:12px;">
                    View: <a href="assess.php"> All </a> <a href="?issh=0"> Checking </a> <a href="?issh=1"> Checked </a> <a href="?istop=0"> Topping </a> <a href="?istop=1"> Toped </a> <a href="?recommend=0"> Recommend </a> <a href="?recommend=1"> Recommended </a> <A href="?isadmin=ok"> Admin </a>
                </div>
                <form action="assess_allDel.php" method="post" name="updateinfo">
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
              <tr>
              <td class="left_bt2">&nbsp; </td>
 
                <td class="left_bt2">ID</td>
                <td class="left_bt2">Pid</td>
                <td class="left_bt2">Status</td>
                <td class="left_bt2">IsTop</td>
                <td class="left_bt2">Recommend</td> 
                <td class="left_bt2">Pinglun</td>
                <td class="left_bt2">usernameshow</td>
                <td class="left_bt2">AddTime</td> 
                <td class="left_bt2">IP</td>
                <td class="left_bt2">Inputer</td>
              </tr>
             
 <?php
 if($infocount>=1)
 {
 foreach($result as $row)
 {
 ?>
       <tr class="left_txt2">
 
     <td bgcolor="#F2F2F2"><input name="id[]" type="checkbox" value="<?php echo $row["id"];?>" /></td>
     <td bgcolor="#F2F2F2"><?php echo $row["id"];?></td>
     <td bgcolor="#F2F2F2"><?php echo $row["title"];?></td>
     <td bgcolor="#F2F2F2"><?php 
     if($row["issh"]==1)
     {
         echo "Checked";
     }
     else
     {
         echo "<span style='color:red;font-weight:bold;'>Checking</span>";
     }
     ?></td>
     <td bgcolor="#F2F2F2"><?php 
     if($row["istop"]==1)
     {
         echo "<span style='font-weight:bold;color:red'>Topped</span>"; 
     }
     else
     {
         echo "Topping";
     }
     ?></td>
     <td bgcolor="#F2F2F2"><?php 
     if($row["recommend"]==1)
     {
         echo "<span style='font-weight:bold;color:red'>Recommended</span>";
     }
     else
     {
         echo "Recommending";
     }
     ?></td>
     <td bgcolor="#F2F2F2"><img src='../image/icon_star_<?php echo $row["pinglun"];?>.gif'></td>
     <td bgcolor="#F2F2F2"><?php echo $row["usernameshow"];?></td>
     <td bgcolor="#F2F2F2"><?php echo date("y-m-d h:i",$row["addtime"]);?></td>
     <td bgcolor="#F2F2F2"><?php echo $row["ip"];?></td>
     <td bgcolor="#F2F2F2"><a href='assess_del.php?id=<?php echo $row["id"];?>'>delete</a> <a href="assess_edit.php?id=<?php echo $row["id"];?>">Change</a></td>
      </tr>   
  <?php
 }
 }
 else
 {
     echo "<tr><td colspan='11'><div style='font-weight:bold;text-align:center;color:red'>No data</div></td></tr>";
 }
  ?>
       <Tr><td colspan="11">
         <input name="" type="submit"  value="Remove All"/>
         <input type="button" name="button" id="button" value="Set Check"   onclick="goinfo('issh',1)" />
         <input type="button" name="button2" id="button2" value="Cancle check" onclick="goinfo('issh',0)" />
         <input type="button" name="button3" id="button3" value="Set Top" onclick="goinfo('istop',1)"/>
         <input type="button" name="button4" id="button4" value="Cancle top" onclick="goinfo('istop',0)" />
         <input type="button" name="button5" id="button5" value="Set Recommend" onclick="goinfo('recommend',1)"/>
         <input type="button" name="button6" id="button6" value="Cancle Recommend" onclick="goinfo('recommend',1)"/>
         <label for="ziduan"></label>
         <input type="hidden" name="ziduan" id="ziduan" />
         <label for="zt"></label>
         <input type="hidden" name="zt" id="zt" /></td></Tr>
       
            </table>
 </form>
            </td>
          </tr>
 
    
        </table>
         
        <div id="page">
                    
           <?php echo $page->show(1);?>
            
        </div>
        <div>
          <form action="" method="get" name="soinfo" onsubmit="return test();">
               Search: <select name="ziduan" id="ziduan">
                 <option value="pid" selected="selected">ProductID</option>
                 <option value="content">Content</option>
                 <option value="usernameshow">Inputer</option>
               </select>
               &nbsp;
               <input name="key" type="text" id="key" />
            
            <input type="submit" name="button7" id="button7" value="Submit" />
            </form>
        </div>
                  <!---->
                  
    </td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
      <td height="17" valign="top" background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17" /></td>
    <td background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
</html>
 