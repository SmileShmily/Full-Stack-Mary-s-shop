<?php
class AdminLogin {
    //put your code here
    private $db;
    function __construct() {
        $this->db= new DbMysql();
    }
    function isLogin($uid,$pwd)
    {
        $result=  $this->db->select("select * from admin where username='$uid'",1);
        $state;  //登陆状态
        $ip=$_SERVER["REMOTE_ADDR"];
        if($result!=false)
            {
             if($result["password"]!=$pwd)
             {
                  $state= -1; //密码错误返回
             }
             else{ 
               $this->db->sql("update admin set logintime='".  time()."',ip='$ip',loginSum=loginSum+1 where username='$uid'");
               $_SESSION["rights"]=$result["rights"];
               $state= 1; //账号密码都正确时候返回
             }
            }
            else
            {
                  $state= -2; //没有用户名
            }
            $this->db->sql("insert into adminLog(username,password,addtime,ip,state) values('$uid','$pwd','".  time()."','$ip','$state')");
            return $state;
            //写入日志
    }
    function loginUp($uid,$pwd)
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        $result=$this->db->sql("update admin set logintime='".  time()."',ip='$ip' where username='$uid' and password='$pwd'");
        return $this->db->affected();
    }
}

?>
