<h1>AccountController</h1>
<?php 
    include_once ('./MVC/helper/framework.php');
    class AccountController extends framework{
        public function login(){
            $this->view('login');
        }
        public function checkCustomer(){

            $data=[
            'username' => $this->input('username'),
            'password'=>$this->input('password')
            ];
            
            include ('./MVC/model/AccountModel.php');
            $cus=new AccountModel();
            $res=$cus->checkCustomer($data['username'],$data['password']);

            if($res){
                    $this->set_logged($data['username']);
                $data['username']=$this->get_username();
                $this->view('home_admin',$data);
                
            }
            else {
                
                $this->view('login');
                echo "that bai";
                
            }
           
        }
        public function logout(){
            $user=$this->is_logged();
            if($user){
            $this->set_logout();
          
            $this->view('login');
            }
        }
        public function index(){
            echo"index";
        }
    }

?>