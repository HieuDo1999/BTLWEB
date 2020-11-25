<?php 
    include_once ('./MVC/helper/database.php');
    class CustomerModel extends database {
        public function getListCustomer(){
            $this->connectDB();
            global $conn;
            $sql="select * from db_customer";
            $res=$this->db_get_list($sql);
            return( $res);
        }
        public function editCustomer($data){//thieu
            $this->connectDB();
            global $conn;
            $username=$data['username'];
            $password=$data['password'];
            $name=$data['name'];
            $email=$data['email'];
            $phone=$data['phone'];
            $sex=$data['sex'];
            $address=$data['address'];
            
            $sql=" UPDATE db_customer SET password='$password' ,
                                         name='$name',
                                         email='$email' ,
                                         sex='$sex' ,
                                         phone='$phone' ,
                                         address='$address'
                                         WHERE username='$username';
                                                                ";
            $res=$this->excuteDB($sql); 
            return $res;
        }
        public function viewCustomer($username){
            $this->connectDB();
            global $conn;
            $sql="select * from db_customer where username='$username'";
            $res=$this->db_get_list($sql);
            return $res;  
        }
        public function deleteCustomer($username){
            $this->connectDB();
            global $conn;
            $sql="delete from db_customer where username='$username';";
            $res=mysqli_query($conn,$sql);
            return $res;

        }
        public function addCustomer($data){
            $this->connectDB();
            $username=$data['username'];
            $password=$data['username'];
            $name=$data['name'];
            $email=$data['email'];
            $sex=$data['sex'];
            $phone=$data['phone'];
            $address=$data['address'];
            global $conn;
            $sql="insert into db_customer (username,password,name,email,sex,phone,address) 
            values('$username','$password','$name','$email','$sex','$phone','$address');";
            $res=$this->excuteDB($sql);
            return $res;

        }


    }

?>