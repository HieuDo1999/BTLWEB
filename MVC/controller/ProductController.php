
<?php 
 include_once ('./MVC/helper/framework.php');
 $is_logged=isset($_SESSION['ss_user_token'])? $_SESSION['ss_user_token'] :"";
// if(!$is_logged||$is_logged['level']!=2) die ("not found file");
class ProductController extends framework {
    public function getListProduct(){
        include_once ('./MVC/model/ProductModel.php');
        $Product=new ProductModel();
        $dataProduct=[];
        $dataProduct=$Product->getListProduct();
        $this->view('admin/indexProduct',$dataProduct);
    }
    public function editProduct(){
        if(isset($_SESSION['ss_user_token']) && $_SESSION['ss_user_token']['level']==2 ) {
        include_once ('./MVC/model/ProductModel.php');
    
        $img="http://localhost/WEB/MVC/public/image/".$this->input('img');
            if(!$img){
                $img="http://localhost/WEB/MVC/public/image/".$this->input('old_img');
            }
      echo $img;
      
        $data=[
            'id'=> $this->input('id'),
            'name'=>$this->input('name'),
            'price'=>$this->input('price'),
            'category_id'=>$this->input('category_id'),
            'quantity'=>$this->input('quantity'),
            'img'=>$img,
            'description'=>$this->input('description'),
            
        ];
        print_r($data);
        $Product=new ProductModel();
        $res=$Product->editProduct($data);
        if($res){
        $this->getListProduct();
        }
        else {
            echo 'update fail';
        }
    }
    else die("not found!");

       
    }
    public function viewProduct(){
        include_once ('./MVC/model/ProductModel.php');
        $productId=$_GET['p'];
      
        $Product=new ProductModel();
        $data=$Product->viewProduct($productId);
        $this->view('customer/viewProduct',$data);     
    }
    public function deleteProduct(){
        if(isset($_SESSION['ss_user_token']) && $_SESSION['ss_user_token']['level']==2 ) {
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
    }

    public function viewProductByName(){
        include_once ('./MVC/model/ProductModel.php');
        $Product= new ProductModel();
        $product_name=$this->input('product_name');
        $products=$Product->findProductByName($product_name);
        $this->view('customer/findProduct',$products);
    }
    public function viewFormAddProduct(){
        $this->view('admin/addProduct');
    }
    public function addProduct(){
        if(isset($_SESSION['ss_user_token']) && $_SESSION['ss_user_token']['level']==2 ) {
            $img="http://localhost/WEB/MVC/public/image/".$_FILES['img']['name'];
     
            $data=[
            'id'=> $this->input('product_id'),
            'name'=>$this->input('product_name'),
            'price'=>$this->input('price'),
            'category_id'=>$this->input('category_id'),
            'quantity'=>$this->input('quantity'),
            'img'=>$img,
            'description'=>$this->input('description')

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
    public function productDetail(){
        
    }

}