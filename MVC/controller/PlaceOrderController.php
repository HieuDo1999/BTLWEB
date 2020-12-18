<?php

// if(!$is_logged||$is_logged['level']!=1) die ("not found file");
include_once('./MVC/helper/framework.php');
class PlaceOrderController extends framework
{   
    public function addProductToCard()
    { 
        echo "hhe";
        $customer_id = (isset($_SESSION['ss_user_token']) && $_SESSION['ss_user_token']['level'] == 1) ? $_SESSION['ss_user_token']['username'] : "";
        include_once('./MVC/model/ProductModel.php');
        $product_id= isset($_GET['p']) ? $_GET['p'] : "";
        
        $quantity=$this->input('qty');
       
        $productModel = new ProductModel();
        $products = $productModel->viewProduct($product_id);
        print_r($products);
        foreach ($products as $product){
        include('./MVC/model/PlaceOrderModel.php');
        include('./MVC/controller/AccountController.php');
        $cart = new PlaceOrderModel();
        if (!isset($_SESSION['cart'][$product_id])) { //check đã tồn tại giỏ hàng có chữa sản phẩm cần thêm ?
            $_SESSION['cart'][$product_id] = array( //nếu chưa thì khởi tạo
                'cart_id' => rand(1, 9999999),
                'customer_id' => $customer_id,
                'product_id' => $product_id,
                'product_name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $quantity,
                'img' => $product['img'],

            );
       
            if ($customer_id) {
                $res = $cart->addToCart($_SESSION['cart'][$product_id]);
                if ($res) echo "da luu \n";
            }
        } else { // nếu có rồi thì cộng qty
            echo $product['id'];
            $_SESSION['cart'][$product_id]['quantity'] += $quantity;
       
            if ($customer_id) {
                $res = $cart->updateQty($_SESSION['cart'][$product_id]);
                if ($res) echo "da update \n";
            }
        }
    }
        $acc= new AccountController();
        $acc->home();
    }
    public function updateCart()
    { //update cart với đầu vào là danh sách các sp chỉ quan tâm đến id, quantity 

        $customer_id = (isset($_SESSION['ss_user_token']) && $_SESSION['ss_user_token']['level'] == 1) ? $_SESSION['ss_user_token']['username'] : "";
        include_once('./MVC/model/ProductModel.php');
        $data = [
            'product_id' => isset($_GET['p']) ? $_GET['p'] : "" //product
        ];
        // $quantity=$_POST['qty'];
        $quantity = 1;
        $_SESSION['cart'][$data['product_id']]['quantity'] = $quantity;
        if ($_SESSION['cart'][$data['product_id']]['quantity'] == 0) { //quantity=0 thi delete product from cart
            $this->session_delete($_SESSION['cart'][$data['product_id']]);
            
        }

        //chỉ quan tâm đến những sản phẩm có trong cart
        // đối với những sản phẩm có trong cart thì chỉ xét đén số lượng
        if (!$customer_id) { // neu da login thif luu vao db
            $this->updateCart($_SESSION['cart']['product_id']);
        }
    }

    public function deleteCart()//xoa toan bo cart
    {
        $this->session_delete('cart'); // xoa cart from session
        if (isset($_SESSION['ss_user_token'])&&$_SESSION['ss_user_token']['level']==1) {
        $cus_id= $_SESSION['ss_user_token']['username'];
        echo $cus_id;
        include('./MVC/model/PlaceOrderModel.php');
        $cart=new PlaceOrderModel();
        $cart->deleteCartDB($cus_id);
        }
        $this->view('customer/cartDetail');
    }
    public function deleteProductFromCart(){
        $product_id=isset($_GET['p'])?$_GET['p']:'';
        if($product_id) {
            unset($_SESSION['cart'][$product_id]);
        }

        if (isset($_SESSION['ss_user_token'])&&$_SESSION['ss_user_token']['level']==1) {
     
        include_once('./MVC/model/PlaceOrderModel.php');
        $cart=new PlaceOrderModel();
        $cart->deleteProductFromCartDB($product_id);
        }
        $this->viewCart();
    }

    public function viewCart()
    {
        if (isset($_SESSION['ss_user_token'])&&$_SESSION['ss_user_token']['level']==1) {
            include_once('./MVC/model/PlaceOrderModel.php');
            $cart=new PlaceOrderModel();
            $carts=$cart->getCartFromDB();
           
            $this->view('customer/cartDetail',$carts);
        }
        else{
            if(isset($_SESSION['cart'])){
            $carts=$_SESSION['cart'];
            $this->view('customer/cartDetail',$carts);
            }
            else{
                $this->view('customer/cartDetail');
            }
        }
    }
}


?>