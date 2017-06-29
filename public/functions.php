<?php



function weberror($title='Error Page',$info='Your operation failed'){
    global $webdir,$webname;
    include WEBDIR."/error.php";
    exit;
}

function webAlter($title,$url){
    echo "<script>alert('$title');location.href='$url';</script>";
    exit;
}

//IP
function getIP(){
    return $_SERVER["REMOTE_ADDR"]; 
}
//char
function strLeft($str,$leng=10,$sl=''){

    $strleng=mb_strlen($str,"gb2312");
    if($strleng>$leng){
        return mb_substr($str, 0,$leng,"gb2312").$sl;
    }else{
        return $str;
    }
     
}


//string
    function guolvStr($str){
            $str=trim($str);
       if(!get_magic_quotes_gpc())
     {
        $str=addslashes($str);
     }
      return htmlspecialchars($str);
        
    }


?>
