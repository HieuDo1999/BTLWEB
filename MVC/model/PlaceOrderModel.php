<?php
include_once ('./MVC/helper/database.php');
    class PlaceOrderModel extends database{
        public function addToCart($cart=array()){
            // $cart['']

            //1 cart có id là customer_id
            // chứa nhiều product
            $id=$cart['cart_id'];
            $customer_id=$cart['customer_id'];
            $product_id=$cart['product_id'];
            $product_name=$cart['product_name'];
            $price=$cart['price'];
            $quantity=$cart['quantity'];
            $img=$cart['img'];

            $sql="insert into db_cart (id,customer_id,product_id,product_name,price,quantity,img) values('$id','$customer_id','$product_id','$product_name','$price','$quantity','$img');";
            // $sql=$this->validateSql($sql);
         
            $res=$this->excuteDB($sql);
            return $res;

        }
        public function updateQty($cart=array()){// update cart
            $quantity=$cart['quantity'];
            $product_id=$cart['product_id'];
            $sql="update db_cart set quantity='$quantity' where product_id='$product_id';";
            echo $sql;
            $res=$this->excuteDB($sql);
            return $res;

        }
        public function deleteCartDB($customer_id) {
            $sql="delete from db_cart where customer_id='$customer_id';";
            $res=$this->excuteDB($sql);
            return $res;
        }
        public function deleteProductFromCartDB($product_id){
            $sql="delete from db_cart where product_id='$product_id';";
            $res=$this->excuteDB($sql);
            return $res;
        }
        public function getCartFromDB(){
            $sql="select * from db_cart;";
            $res=$this->db_get_list($sql);
            return $res;
        }
      
    }


?>