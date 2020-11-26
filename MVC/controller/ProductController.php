<h1>ProductController</h1>
<?php 

if(!isset($_SESSION['ss_user_token'])) die ("not found file");
 include_once ('./MVC/helper/framework.php');
class ProductController extends framework {
    public function getListProduct(){
        include_once ('./MVC/model/ProductModel.php');
        $Product=new ProductModel();
        $dataProduct=[];
        $dataProduct=$Product->getListProduct();
        $this->view('Product/index',$dataProduct);
    }
    public function editProduct(){
        include_once ('./MVC/model/ProductModel.php');
        $data=[
            'id'=> $this->input('id'),
            'name'=>$this->input('name'),
            'price'=>$this->input('price'),
            'category_id'=>$this->input('catgory_id'),
            'quantity'=>$this->input('quantity'),
            'img'=>$this->input('img'),
            
        ];
        $Product=new ProductModel();
        $res=$Product->editProduct($data);
        if($res){
        $this->getListProduct();
        }
        else {
            echo 'update fail';
        }
       
    }
    public function viewProduct(){
        include_once ('./MVC/model/ProductModel.php');
        $productId=$_GET['p'];
        echo $productId;
        $Product=new ProductModel();
        $data=$Product->viewProduct($productId);
        $this->view('Product/view',$data);     
    }
    public function deleteProduct(){
        $productId=$_GET['p'];
        echo $productId;
        include_once ('./MVC/model/ProductModel.php');
        $Product= new ProductModel();
        $res=$Product->deleteProduct($productId);
        if($res){
        $this->getListProduct();
        }
        else echo "delete fail";
    }
    public function viewFormAddProduct(){
        $this->view('Product/add');
    }
    public function addProduct(){
        $data=[
            'id'=> $this->input('id'),
            'name'=>$this->input('name'),
            'price'=>$this->input('price'),
            'category_id'=>$this->input('catgory_id'),
            'quantity'=>$this->input('quantity'),
            'img'=>$this->input('img'),

        ];
        include_once ('./MVC/model/ProductModel.php');
        $Product=new ProductModel();
        $res=$Product->addProduct($data);
        if($res){
            $this->getListProduct();
        }
        else echo "add fail";
        //

    }

}