<?php 

if(!defined('in_site')) die('not found');
    class framework{

        public function view($viewPath,$data=[]){
            
            if(file_exists(BASE_URL.'/MVC/view/'.$viewPath.'.PHP')){
                require_once (BASE_URL.'/MVC/view/'.$viewPath.'.PHP');
            }
    
        }
        public function model($model){
            if(file_exists(BASE_URL.'/MVC/model/'.$model.'.PHP')){
                require_once (BASE_URL.'/MVC/model/'.$model.'.PHP');
                return new $model;
            }

        }
        public function input($input){
            if($_SERVER['REQUEST_METHOD']=="POST"||$_SERVER['REQUEST_METHOD']=="post"){
                return trim(strip_tags($_POST[$input]));
            }else {
                if($_SERVER['REQUEST_METHOD']=="GET"||$_SERVER['REQUEST_METHOD']=="get"){
                    return trim(strip_tags($_GET[$input]));
            }

            }
         }
         public function session_get($key){
            if(!empty($key)){
               return $_SESSION[$key];
            }
       
          }
       
          // Unset session
          public function session_delete($key){
             if(!empty($key)){
                unset($_SESSION[$key]);
                
             }
          }
       
          // Destroy whole sessions
          public function destroy(){
       
             session_destroy();
       
          }

          public function session_set($key,$value){
              $_SESSION[$key]=$value;
          }
          public function set_logged($username){
            $this->session_set('ss_user_token',array(
                'username' => $username
            ));
            
          }
          public function is_logged(){
              return $this->session_get('ss_user_token'); 
          }
          public function set_logout(){
              $this->session_delete('ss_user_token');
          }
          public function get_username(){
              $user=$this->is_logged();
              return isset($user['username'])?$user['username']:'';
          }





       

}

?>