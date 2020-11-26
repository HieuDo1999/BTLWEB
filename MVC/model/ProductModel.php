<?php 
    include_once ('./MVC/helper/database.php');
    class ProductModel extends database {
        public function getListProduct(){
            $this->connectDB();
            global $conn;
            $sql="select * from db_Product";
            $res=$this->db_get_list($sql);
            return( $res);
        }
        public function editProduct($data){//thieu
            $this->connectDB();
            global $conn;
            $ProductId=$data['id'];
            $ProductName=$data['name'];
            $ProductPrice=$data['price'];
            $CategoryId=$data['category_id'];
            $Quantity=$data['quantity'];
            $img=$data['img'];
        
            
            $sql=" UPDATE db_Product SET 
                                         name='$ProductName',
                                         price='$ProductPrice' ,
                                         category_id='$CategoryId' ,
                                         quantity='$Quantity' ,
                                         img='$img'
                                         WHERE id='$ProductId';
                                                                ";
            $res=$this->excuteDB($sql); 
            return $res;
        }
        public function viewProduct($id){
            $this->connectDB();
            global $conn;
            $sql="select * from db_Product where id='$id'";
            $res=$this->db_get_list($sql);
            return $res;  
        }
        public function deleteProduct($id){
            $this->connectDB();
            global $conn;
            $sql="delete from db_Product where id='$id';";
            $res=mysqli_query($conn,$sql);
            return $res;

        }
        public function addProduct($data){
            $this->connectDB();
            $ProductId=$data['id'];
            $ProductName=$data['name'];
            $ProductPrice=$data['price'];
            $CategoryId=$data['category_id'];
            $Quantity=$data['quantity'];
            $img=$data['img'];
            global $conn;
            $sql="insert into db_Product (id,name,price,category_id,quantity,img) 
            values('$ProductId','$ProductName','$ProductPrice','$CategoryId','$Quantity','$img');";
            $res=$this->excuteDB($sql);
            return $res;

        }


    }

?>