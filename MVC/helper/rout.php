<?php 
    class rout {
        private $controller='AccountController';
        private $method='homeClient';
        private $parameters = [];
        public function __construct(){
            $c=isset($_GET['c'])? $_GET['c']:'';
            // $c=utf8_encode()
            $m=isset($_GET['m'])? $_GET['m']:'';
            $p=isset($_GET['p'])? $_GET['p']:[];
            if(file_exists(BASE_URL.'/MVC/controller/'.$c.'.php')){
                $this->controller=$c;
             }
            require_once "./MVC/controller/".$this->controller.'.php';
            $this->controller= new $this->controller;
            if(method_exists($this->controller,$m)){
                $this->method=$m;
            }
            // $this->parameters=$p;
            $url=$this->url();
            if(isset($url)){
                $this->params = $url;
            } else {
                $this->params = [];
            }
            call_user_func_array([$this->controller, $this->method], $this->parameters); 

    }
    public function url(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }

    }
}


?>