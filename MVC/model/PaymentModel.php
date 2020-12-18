<?php
include_once ('./MVC/helper/database.php');
    class PaymentModel extends database{
        public function saveOrderTransaction($data){
            $id=$data['transaction_id'];
            $customer_id=$data['customer_id'];
            $customer_name=$data['customer_name'];
            $phone=$data['phone'];
            $address=$data['address'];
            $note=$data['note'];
            $amount=$data['amount'];
            $sql="insert into db_transaction (id,customer_id,customer_name,phone,address,note,amount) values('$id','$customer_id','$customer_name','$phone','$address','$note','$amount');";
            $res=$this->excuteDB($sql);
           return $res;
 
        }
    }


?>