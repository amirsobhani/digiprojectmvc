<?php

class Controller
{
    function __construct()
    {

    }

    function View($viewUrl, $data = [], $NoRequireHeader = '', $NoRequireFooter = '')
    {
        if ($NoRequireHeader == '') {
            require('header.php');
        }
        require('views/' . $viewUrl . '.php');
        if ($NoRequireFooter == '') {
            require('footer.php');
        }

    }


    function Model($modelUrl)
    {
        require('models/model_' . $modelUrl . '.php');
        $className = 'model_' . $modelUrl;
        $this->model = new $className;
    }

    function AdminView($viewUrl, $data = [])
    {
        require('views/admin/header_layout.php');
        require('views/admin/r_aside_layout.php');
        require ('views/'.$viewUrl.'.php');
        require('views/admin/l_aside_layout.php');
    }
}


?>