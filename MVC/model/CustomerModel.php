<?php 
    if(!defined('in_site')) die('not found');
    include_once ('./MVC/helper/database.php');
    class CustomerModel extends database {
        public function getListCustomer(){
            $this->connectDB();
            global $conn;
            $sql="select * from db_customer";
            $res=$this->db_get_list($sql);
            return( $res);
        }
        public function editCustomer($datas){//thieu
            $this->connectDB();
            global $conn;
            foreach($datas as $data ): // convet array to string
            $sql=" UPDATE db_customer set password='$data ['password']' ,
                                         name='$data ['name']' ,
                                         email='$data ['email']' ,
                                         sex='$data ['sex']' ,
                                         phone='$data ['phone']' ,
                                         address=$data ['address']
                                         where username='$data ['username]';
                                                                ";
            $res=$this->excuteDB($sql);                                                   
            print_r($data);                    
            endforeach;
            return $res;
        }
        public function viewCustomer($username){
            $this->connectDB();
            global $conn;
            $sql="select * from db_customer where username='$username'";
            $res=$this->db_get_list($sql);
            return $res;  
        }


    }

?>