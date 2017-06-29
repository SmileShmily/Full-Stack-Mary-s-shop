<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<style>
body{

	margin:0px;
	pading:0px;
	font-size:14px;
	}
</style>
</head>

<body>
    <?php
    if(@$_GET["action"]=="sava")
    {
        //1、首先判断一个是不是有效文件
            if(!is_uploaded_file($_FILES["upfile"]["tmp_name"]))
            {
             echo "<script>alert('Please select a thumbnail file');location.href='uploadpic.php';</script>";
             exit(0);
            }
        $file=$_FILES["upfile"];
        $savadir="../upload/"; 
        $isoktype=array(
            "image/jpeg","image/gif","image/pjpeg"
        );
        $isoksize=102400; //允许上传的大小
        //2、判断文件格式
        if(!in_array($file["type"],$isoktype))
        {
            echo "<script>alert('Do not allow the format');location.href='uploadpic.php'</script>";
            exit(0);
        }
        
        //3、判断图片大小
        if($isoksize<$file["size"])
        {
            echo "<script>alert('The file is too large');location.href='uploadpic.php'</script>";
            exit(0);
        }   
        
        //4、水印
        //5、缩略图
        
$exe=substr($file["name"],  (stripos($file["name"],".")+1));               
        
$newname=time();
$newname.=rand()*1000;
//echo $newname;
//echo $exe;
//
//exit;
        //执行保存操作
        move_uploaded_file($file["tmp_name"],$savadir.$newname.".".$exe);
        $picurl=$savadir.$newname.".".$exe;
        echo "Uploaded successfully <a href='uploadPic.php'> Return to upload </a>";
        //JS把得到的地址赋值给咱们的FORM下面的PICURL
        echo "<script>parent.document.admin.picurl.value='$picurl';</script>";
    }
    else{
    ?>
<form action="?action=sava" method="post"  enctype="multipart/form-data">
<input name="upfile" type="file" /> <input name="" type="submit" value="upload" />
</form>
    <?php
    }
    ?>
</body>
</html>