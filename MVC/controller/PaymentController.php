<?php 
// if(!$is_logged||$is_logged['level']!=1) die ("not found file");
 include_once ('./MVC/helper/framework.php');
class PaymentController extends framework {
    
    public function checkCustomer(){
        $is_logged=isset($_SESSION['ss_user_token'])? $_SESSION['ss_user_token'] :"";
        print_r($is_logged);
        if($is_logged!=""&&$is_logged['level']==1){
            return true;
           
        }
        else return false;
    }
    public function viewFormPayment(){
        if($this->checkCustomer()){
        $this->view('payment');
        }
        else {
            $this->view('login');
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

}
?> 