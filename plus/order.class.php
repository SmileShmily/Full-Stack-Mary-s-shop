<?php


class order {
    //put your code here
    private $db;
    function __construct(){
        $this->db = new DbMysql();
    }
    
    
    //获取订单清单
    function getOrderList($orderID){
        $sql="select * from orderList where orderID='$orderID'";
        return $this->db->select($sql);   
    }
    
    //支付状态
    function getPaymentState($state){
        
        switch ($state) {
            case 0:
                
                return "Non-payment";
                break;
            case 1:
                return "Paid";
                break;
 
        }
    }
    
    //订单状态
    function getOrderState($state){
        switch ($state) {
            case 0:
                return "unconfirmed";
                break;
            case 1:
                return "Ship sending";
                break;
            case 2:
                return "Shipped";
                break;
            case 3:
                return "Done";
                break;
            case 4:
                return "Cancled";
                break;
        }
    }
}

?>
