<?php 
// if(!$is_logged||$is_logged['level']!=1) die ("not found file");
 include_once ('./MVC/helper/framework.php');
class PaymentController extends framework {
    
    public function checkCustomer(){
        $is_logged=isset($_SESSION['ss_user_token'])? $_SESSION['ss_user_token'] :"";
 
        if($is_logged!=""&&$is_logged['level']==1){
            return true;
           
        }
        else return false;
    }
    public function saveOrder(){
        $flag=1;
        if($this->checkCustomer()){
        include_once ('./MVC/model/CustomerModel.php');
        $cus=new CustomerModel();
        $customer=$cus->viewCustomer($_SESSION['ss_user_token']['username']);
        $data=[
            'customer'=>$customer,
            'amount'=>$this->input('amount')
        ];
    
        $this->view('customer/delivery',$data);
        }
        else {
            $this->view('login',$flag);
        }
    } 
    public function submitForm(){
        if($this->checkCustomer()){
            $data=[
                'id'=>random_bytes(100),
                'customer_id'=>$_SESSION['ss_user_token']['username'],
                ''
            ];


        }
    }
    public function payment(){
        include_once ('./MVC/model/PaymentModel.php');
        $payment= new PaymentModel();
        $data=[
            'transaction_id'=>rand(1,999999999),
            'customer_id'=>$_SESSION['ss_user_token']['username'],
            'customer_name'=>$this->input('name'),
            'address'=>$this->input('address'),
            'note'=>$this->input('note'),
            'phone'=>$this->input('phone'),
            'amount'=>$this->input('amount')
            
        ];
        
        $res=$payment->saveOrderTransaction($data);
        if($res){
            include_once('./MVC/controller/PlaceOrderController.php');
            $place=new PlaceOrderController();
            $place->deleteCart();
            echo "dat hang thanh cong";
        }else{
            echo "that bai";
        }
    }

}
?> 