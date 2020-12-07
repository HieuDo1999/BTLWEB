<?php 
    include_once ('./MVC/helper/database.php');
    class ProductModel extends database {
        public function getListProduct(){
            $this->connectDB();
            global $conn;
            $sql="select * from db_Product";
            $sql=$this->validateSql($sql);
            $res=$this->db_get_list($sql);
            return( $res);
        }
        public function editProduct($data){//thieu
            $this->connectDB();
            global $conn;
            $ProductId=$this->validateId($data['id']);
            $ProductName=$this->validateId($data['name']);
            $ProductPrice=$this->validateId($data['price']);
            $CategoryId=$this->validateId($data['category_id']);
            $Quantity=$this->validateId($data['quantity']);
            $img=$this->validateId($data['img']);
        
            
            $sql=" UPDATE db_Product SET 
                                         name='$ProductName',
                                         price='$ProductPrice' ,
                                         category_id='$CategoryId' ,
                                         quantity='$Quantity' ,
                                         img='$img'
                                         WHERE id='$ProductId';
                                                                ";
            $sql=$this->validateSql($sql);                                                    
            $res=$this->excuteDB($sql); 
            return $res;
        }
        public function viewProduct($id){
            $this->connectDB();
            global $conn;
            $id=$this->validateId($id);
            $sql="select * from db_Product where id='$id'";
            $sql=$this->validateSql($sql);
            $res=$this->db_get_list($sql);
            return $res;  
        }
        public function deleteProduct($id){
            $this->connectDB();
            global $conn;
            $id=$this->validateId($id);
            $sql="delete from db_Product where id='$id';";
            $sql=$this->validateSql($sql);
            $res=mysqli_query($conn,$sql);
            return $res;

        }
        public function addProduct($data){
            $this->connectDB();
            $ProductId=$this->validateId($data['id']);
            $ProductName=$this->validateId($data['name']);
            $ProductPrice=$this->validateId($data['price']);
            $CategoryId=$this->validateId($data['category_id']);
            $Quantity=$this->validateId($data['quantity']);
            $img=$this->validateId($data['img']);
            global $conn;
            $sql="insert into db_Product (id,name,price,category_id,quantity,img) 
            values('$ProductId','$ProductName','$ProductPrice','$CategoryId','$Quantity','$img');";
            $sql=$this->validateSql($sql);
            $res=$this->excuteDB($sql);
            return $res;

        }


    }

?>