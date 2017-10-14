<?php

class App{
    public $controller = 'index';
    public $method = 'index';
    public $params = [];

    function __construct(){
        if (isset($_GET['url'])){
            $url = $_GET['url'];
            $url = $this->parsUrl($url);
            $this -> controller = $url[0];
            unset($url[0]);
            if (isset($url[1])){
                $this -> method = $url[1];
//                echo 'method :'.$this->method;
                unset($url[1]);
            }
            $this -> params = array_values($url);
        }
        $controllerUrl = 'controllers/'.$this -> controller.'.php';
        if (file_exists($controllerUrl)){
            require ($controllerUrl);
            $object = new $this->controller;
            if (method_exists($object,$this->method)){
                call_user_func_array([$object , $this->method] , $this->params);
            }

        }


    }
    function parsUrl($url){
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = rtrim($url,'/');
        $url = explode('/',$_GET['url']);
        return $url;
    }

}


?>