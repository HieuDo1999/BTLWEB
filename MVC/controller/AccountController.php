<?php 
    include_once ('./MVC/helper/framework.php');
    class AccountController extends framework{
        //view login
        public function login(){
            $this->view('login');
           
        }
        public function home(){
            include_once ('./MVC/model/ProductModel.php');
            $product=new ProductModel();
            $data=[];
            $data=$product->getListProduct();
            $this->view('customer/index',$data);
        }
        
        //check login is admin or customer
        public function checkLogin(){

            $data=[
            'username' => $this->input('username'),
            'password'=>$this->input('password')
            ];
            
            include ('./MVC/model/AccountModel.php');
            $Acc=new AccountModel();
            $checkCus=$Acc->checkCustomer($data['username'],$data['password']);
            $checkAd=$Acc->checkAdmin($data['username'],$data['password']);

            if($checkAd){
                $this->set_logged($data['username'],2);
                $data['username']=$this->get_username();
                $this->view('admin/home',$data);
                
            }
            else if($checkCus)
            {
                $this->set_logged($data['username'],1);
                $data['username']=$this->get_username();
                $this->view('client/home',$data);
            }else{
                
                $this->view('login');
                echo "that bai";
                
            }
           
        }

        //đăng kí tài khoản khách hàng
        public function viewSignUpForm(){
           $this->view('sign_up'); 
        }
        public function signUp(){
            include_once ('./MVC/controller/CustomerController.php');
            $cus=new CustomerController();
           $res= $cus->addCustomer();
           if($res){
                echo "them thanh cong";
           }else{
                echo"fail";
           }

        }
       


        public function logout(){
            $user=$this->is_logged();
            if($user){
            $this->set_logout();
          
            $this->view('login');
            }
        }
       
      


    }

?>