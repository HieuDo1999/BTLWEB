<?php 
    if(!defined('in_site')) die('not found');
    include_once ('./MVC/helper/database.php');
    class AccountModel extends database {
        public function checkCustomer($username, $password){
            $this->connectDB();
            global $conn;
            $sql="select * from db_customer where name='$username' and password='$password'";
            $res=mysqli_num_rows(mysqli_query($conn,$sql));
            return( $res);
        }
    }

?>