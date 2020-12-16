<h1>CustomerController</h1>
<?php 
 include_once ('./MVC/helper/framework.php');
 $is_logged=isset($_SESSION['ss_user_token'])? $_SESSION['ss_user_token'] :"";
if(!$is_logged||$is_logged['level']!=2) die ("not found file");
class CustomerController extends framework {
    public function getListCustomer(){
        include_once ('./MVC/model/CustomerModel.php');
        $customer=new CustomerModel();
        $data=[];
        $data=$customer->getListCustomer();
        $this->view('customer/index',$data);
    }
    public function editCustomer(){
        include_once ('./MVC/model/CustomerModel.php');
        $data=[
            'username'=> $this->input('username'),
            'password'=>$this->input('password'),
            'name'=>$this->input('name'),
            'email'=>$this->input('email'),
            'sex'=>$this->input('sex'),
            'phone'=>$this->input('phone'),
            'address'=>$this->input('address'),
        ];
        $customer=new CustomerModel();
        $res=$customer->editCustomer($data);
        if($res){
        $this->getListCustomer();
        }
        else {
            echo 'update fail';
        }
       
    }
    public function viewCustomer(){
        include_once ('./MVC/model/CustomerModel.php');
        $username=$_GET['p'];
        echo $username;
        $customer=new CustomerModel();
        $data=$customer->viewCustomer($username);
        $this->view('customer/view',$data);     
    }
    public function deleteCustomer(){
        $username=$_GET['p'];
        echo $username;
        include_once ('./MVC/model/CustomerModel.php');
        $customer= new CustomerModel();
        $res=$customer->deleteCustomer($username);
        if($res){
        $this->getListCustomer();
        }
        else echo "delete fail";
    }
    public function viewFormAddCustomer(){
        $this->view('customer/add');
    }
    public function addCustomer(){
        $data=[
            'username'=> $this->input('username'),
            'password'=> $this->input('password'),
            'name'=> $this->input('name'),
            'email'=>$this->input('email'),
            'sex'=>$this->input('sex'),
            'phone'=>$this->input('phone'),
            'address'=>$this->input('address')

        ];
        include_once ('./MVC/model/CustomerModel.php');
        $customer=new CustomerModel();
        $res=$customer->addCustomer($data);
        if($res){
            $this->getListCustomer();
        }
        else echo "add fail";
        //

    }


}
?>
