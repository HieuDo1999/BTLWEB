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
        public function editCustomer(){
            $this->connectDB();
            global $conn;
            $sql="";
            
        }

    }

?>