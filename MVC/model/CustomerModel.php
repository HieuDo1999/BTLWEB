<?php 
    include_once ('./MVC/helper/database.php');
    class CustomerModel extends database {
        public function getListCustomer(){
            $this->connectDB();
            global $conn;
            $sql="select * from db_customer";
            $sql=$this->validateSql($sql);
            $res=$this->db_get_list($sql);
            return( $res);
        }

        public function findCustomerByName($name){
            $sql="select * from db_customer where name='$name';";
            echo $sql;
            $sql=$this->validateSql($sql);
            $res=$this->db_get_list($sql);
            return( $res);
        }

        public function editCustomer($data){//thieu
           
            $username=$this->validateId($data['username']);
            $password=$this->validateId($data['password']);
            $name=$this->validateId($data['name']);
            $email=$this->validateId($data['email']);
            $phone=$this->validateId($data['phone']);
            $sex=$this->validateId($data['sex']);
            $address=$this->validateId($data['address']);
            
            $sql=" UPDATE db_customer SET password='$password' ,
                                         name='$name',
                                         email='$email' ,
                                         sex='$sex' ,
                                         phone='$phone' ,
                                         address='$address'
                                         WHERE username='$username';
                                                                ";

            $sql=$this->validateSql($sql);                                                        
            $res=$this->excuteDB($sql); 
            return $res;
        }
        public function viewCustomer($username){
            $this->connectDB();
            global $conn;
            $username=$this->validateId($username);
            $sql=$this->validateSql("select * from db_customer where username='$username'");
            $res=$this->db_get_list($sql);
            return $res;  
        }
        public function getCustomerName($username){
            $this->connectDB();
            global $conn;
            $username=$this->validateId($username);
            $sql=$this->validateSql("select name from db_customer where username='$username'");
            $res=$this->excuteDB($sql);
            return $res;  
        }

        public function deleteCustomer($username){
            $this->connectDB();
            global $conn;
            $username=$this->validateId($username);
            $sql=$this->validateSql("delete from db_customer where username='$username';");
            $res=mysqli_query($conn,$sql);
            return $res;

        }
        public function addCustomer($data){
            $this->connectDB();
            $username=$this->validateId($data['username']);
            $password=$this->validateId($data['password']);
            $name=$this->validateId("name");
            $phone=$this->validateId($data['phone']);
            $address=$this->validateId($data['address']);
            global $conn;
            $sql="insert into db_customer (username,password,name,phone,address) 
            values('$username','$password','$name','$phone','$address');";
            $sql=$this->validateSql($sql);
            $res=$this->excuteDB($sql);
            return $res;

        }


    }

?>