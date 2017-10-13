<?php

class Index extends Controller {

    function __construct()
    {
//        echo "we are in index controller!<br>";
    }
    function index(){
        $this->View('index/index');
    }

    function sayhello(){
        echo 'we are in sayhello method!';
    }
    function FullName($name="" , $family="" , $age = ""){
        echo $family.'<br>';
        echo $name.'<br>';
        echo $age.'<br>';
    }


}


?>