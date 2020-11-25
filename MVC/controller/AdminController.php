<h1>AdminController</h1>
<?php 
 include_once ('./MVC/helper/framework.php');
class AdminController extends framework {
    public function getListCustomer(){
        include_once ('./MVC/model/CustomerModel.php');
        $customer=new CustomerModel();
        $dataCustomer=[];
        $dataCustomer=$customer->getListCustomer();
        $this->view('customer/index',$dataCustomer);
    }
    public function editCustomer(){//thieu
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
        print_r($res);
        $this->getListCustomer();
       

    }
    public function viewCustomer(){//thieu
        include_once ('./MVC/model/CustomerModel.php');
        $username=$_GET['p'];
        echo $username;
        $customer=new CustomerModel();
        $data=$customer->viewCustomer($username);
        $this->view('customer/view',$data);


        
    }


}


?> 