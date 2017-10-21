<?php

class Index extends Controller
{

    function __construct()
    {
//        echo "we are in index controller!<br>";
    }

    function index()
    {
        $result = $this->model->getProduct();
        $this->View('index/index', $result);
    }

    function sayhello()
    {
        echo 'we are in sayhello method!';
    }

    function FullName($name = "", $family = "", $age = "")
    {
        echo $family . '<br>';
        echo $name . '<br>';
        echo $age . '<br>';
    }


}


?>