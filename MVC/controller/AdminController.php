<?php 
$is_logged=isset($_SESSION['ss_user_token'])? $_SESSION['ss_user_token'] :"";
if(!$is_logged||$is_logged['level']!=2) die ("not found file");
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