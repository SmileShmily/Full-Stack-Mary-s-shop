<?php
require_once 'islogin.php';
require_once '../plus/DbMysql.php';
require_once '../plus/page.class.php';

$db= new DbMysql();
$rights=$_SESSION["rights"];     // 身份标示
$username=$_SESSION["username"]; //当前后台管理员
$sql="select article.*,articleType.typename from article inner join articleType on article.typeid=articleType.id";    //基本查询语句
$parm=" where 1";                //查询条件参数


$typeid=@$_GET["typeid"]; //获取分类ID
$keyword=@$_GET["key"];

 
if($rights!=1)
{
    $parm.=" and inputer='$username'";
}

if($typeid!="")
{
    $parm.=" and typeid=$typeid";
}

if($keyword!="")
{
    $parm.=" and title like '%$keyword%'";
}








// 注意咱们要用到的信息先后顺序

$sql.=$parm." order by id desc ";

//分页操作开始
$pagesize=10;  //每页数量
$db->sql($sql);
$infocount=$db->affected();; //信息总数量
$page=new page($infocount,$pagesize);
// 分页操作结束
//echo "信息总数：".$infocount; //信息总数
//echo "<br>"; 
//echo $sql;
//echo "<br>"; 


$sql.=$page->limit();
//echo $sql;
$result=$db->select($sql);

//echo "<br>";
//echo "真实查询出来的结果数量：".count($result);
//
//echo "<br>";


//echo $page->pageurl();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>article</title>
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
function test()
{
	if(document.formsearch.key.value=='')
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
        <td height="31"><div class="titlebt">Article</div></td>
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
            <td class="left_txt">location: Article List</td>
          </tr>
          <tr>
            <td height="20">
 <div style="line-height:25px;font-size:12px;">search: <a href="article.php">  all </a>
  <?php
   $type= $db->select("select * from articleType");
   foreach($type as $row)
   {
       if($typeid==$row["id"])
       {
       echo "<b>".$row["typename"]."<b>&nbsp;";    
       }
       else
       {
       echo "<A href='?typeid=".$row["id"]."'>".$row["typename"]."</a>&nbsp;";
       }
   }
  ?>
 </div>
                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td><div class="add"><A href='article_add.php'><img src="images/add.gif" width="16" height="16" />add article</a></div></td>
                <td width="150" align="right"><label for="select"></label>
                 
<select name="select" id="select" onchange="javascript:location.href=this.options[selectedIndex].value">
<option value='article.php'>All</option>
<?php
foreach($type as $row)
{
    if($typeid==$row["id"])
    {
    echo "<option value='?typeid=".$row["id"]."' selected>".$row["typename"]."</option>";    
    }
    else{
    echo "<option value='?typeid=".$row["id"]."'>".$row["typename"]."</option>";
    }
}
?>
</select>
                
                </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>
           <form action="articleAlldel.php" method="post">
            <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                    <tr>
                <td class="left_bt2">ID</td>
                <td class="left_bt2">Title</td>
                <td class="left_bt2">TitleID</td>
                <td class="left_bt2">Author</td>
                <td class="left_bt2">Com</td>
                <td class="left_bt2">Hits</td>
                <td class="left_bt2">Inputer</td> 
                <td class="left_bt2">Addtime</td>
                
                <td class="left_bt2">Content</td>
              </tr>
             
      <?php
      if($infocount>=1){
       foreach ($result as $row){
      ?>
       <tr class="left_txt2">
        <td bgcolor="#F2F2F2"><input name="id[]" id="id" type="checkbox" value="<?php echo $row["id"];?>" /></td>
         <td bgcolor="#F2F2F2"><?php echo $row["title"];?></td>
         <td bgcolor="#F2F2F2"><?php echo $row["typename"]; ?></td>
           <td bgcolor="#F2F2F2"><?php echo $row["author"];?></td>
            <td bgcolor="#F2F2F2"><?php echo $row["com"];?></td>
             <td bgcolor="#F2F2F2"><?php echo $row["hits"];?></td>
              <td bgcolor="#F2F2F2"><?php echo $row["inputer"];?></td>
               <td bgcolor="#F2F2F2"><?php echo date("Y-m-d",$row["addtime"]);?></td>
            <td bgcolor="#F2F2F2"><A href="articleDel.php?id=<?php echo $row["id"];?>">delete</a> <a href="article_edit.php?id=<?php echo $row["id"];?>">change</a></td>
              </tr>   
        <?php
                    }}
                    else
                    {
                        echo "<tr class='left_txt2'><td colspan='6'>No data</td></tr>";
                    }
        ?>   
               <tr><tD colspan="6"><input name="submit1" value="Delete All" type="submit" /></tD></tr>
            </table>
             </form>
            </td>
          </tr>
 
 
        </table>
         <div style="font-size:12px;"><form action="article.php" method="get"  id="formsearch" name="formsearch" onsubmit="return test();">
          Title Keyword: <input name="key" type="text" /> <input name="" type="submit" value="Search" />
         </form></div>
        <div id="page">
            <?php
            
            echo $page->show(2);
            ?>
            
        </div>
                  <!---->
                  
        </div>    
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
<?php
function classname($str)
{
     //通过查询数据库 条件 就是咱们传入进来的变量
    //然后我返回的就是该条件的信息
    //echo "分类:$str";
}
?>
