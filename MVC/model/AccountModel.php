<?php 
    
    include_once ('./MVC/helper/database.php');
    class AccountModel extends database {
        public function checkCustomer($username, $password){
            $this->connectDB();
            global $conn;
            $username=$this->validateSql($username);
            $password=$this->validateId($password);
            $sql="select * from db_customer where username='$username' and password='$password'";
            $sql=$this->validateSql($sql);
            $res=mysqli_num_rows(mysqli_query($conn,$sql));
            return( $res);
        }
        public function checkAdmin($username, $password){
            $this->connectDB();
            global $conn;
            $username=$this->validateSql($username);
            $password=$this->validateId($password);
            $sql="select * from db_admin where username='$username' and password='$password'";
            $sql=$this->validateSql($sql);
            $res=mysqli_num_rows(mysqli_query($conn,$sql));
            return( $res);
        }

    }

?>