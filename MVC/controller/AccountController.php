<h1>AccountController</h1>
<?php 
    include_once ('./MVC/helper/framework.php');
    class AccountController extends framework{
        public function login(){
            $this->view('login');
        }
        public function homeClient(){
            $this->view('client/home');
        }

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
                $this->set_logged($data['username']);
                $data['username']=$this->get_username();
                $this->view('admin/home',$data);
                
            }
            else if($checkCus)
            {
                $this->set_logged($data['username']);
                $data['username']=$this->get_username();
                $this->view('customer/index',$data);
            }else{
                
                $this->view('login');
                echo "that bai";
                
            }
           
        }
        public function loginCustomer (){
            $this->view('login');
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