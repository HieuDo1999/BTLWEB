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
            $img=($data['img']);
            $description=$data['description'];
        
            
            $sql=" UPDATE db_product SET 
                                         name='$ProductName',
                                         price='$ProductPrice' ,
                                         category_id='$CategoryId' ,
                                         quantity='$Quantity' ,
                                         img='$img',
                                         description='$description'
                                         WHERE id='$ProductId';
                                                                ";
            // $sql=$this->validateSql($sql);    
            echo $sql;                                                
            $res=$this->excuteDB($sql); 
            return $res;
        }
        public function viewProduct($id){
            $this->connectDB();
            global $conn;
            $id=$this->validateId($id);
            $sql="select * from db_product where id='$id'";
            $sql=$this->validateSql($sql);
            $res=$this->db_get_list($sql);
            return $res;  
        }
        public function deleteProduct($id){
            $this->connectDB();
            global $conn;
            $id=$this->validateId($id);
            $sql="delete from db_Product where id='$id';";
            // $sql=$this->validateSql($sql);
            $res=mysqli_query($conn,$sql);
            return $res;

        }
        public function addProduct($data){
           
            $ProductId=$this->validateId($data['id']);
            $ProductName=$this->validateId($data['name']);
            $ProductPrice=$this->validateId($data['price']);
            $CategoryId=$this->validateId($data['category_id']);
            $Quantity=$this->validateId($data['quantity']);
            $img=$this->validateId($data['img']);
            $description=$this->validateId($data['description']);
            global $conn;
            $sql="insert into db_product (id,name,price,category_id,quantity,img,description) values('$ProductId','$ProductName','$ProductPrice','$CategoryId','$Quantity','$img','$description');";
            // $sql=$this->validateSql($sql);
            $res=$this->excuteDB($sql);
            echo $sql;
            return $res;

        }


    }

?>