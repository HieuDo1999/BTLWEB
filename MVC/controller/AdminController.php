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
    public function editCustomer(){
        include_once ('./MVC/model/CustomerModel.php');
        $customer=new CustomerModel();
        $name=$_GET['p'];
        echo $name;
        
    }

}


?> 