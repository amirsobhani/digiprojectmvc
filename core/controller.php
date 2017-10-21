<?php

class Controller
{
    function __construct()
    {

    }

    function View($viewUrl, $data=[])
    {
        require('header.php');
        require('views/' . $viewUrl . '.php');
        require('footer.php');
    }

    function Model($modelUrl)
    {
        require('models/model_' . $modelUrl . '.php');
        $className = 'model_' . $modelUrl ;
        $this->model = new $className;
    }
}


?>