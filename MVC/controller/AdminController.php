<h1>AdminController</h1>
<?php 

if(!isset($_SESSION['ss_user_token'])) die ("not found file");
 include_once ('./MVC/helper/framework.php');
class AdminController extends framework {
    public function viewHomeAdmin(){
        $user=$this->is_logged();
        if($user){
            $this->view('admin/home');
        }
    }
}


?> 