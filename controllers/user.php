<?php

class User extends Controller
{
    function __construct()
    {
        Model::sesionInit();
        $check = Model::sessionOnGet('UserId');
        if ($check != false) {
            header('location:' . URL . 'shipping');
        }
    }

    function index()
    {
        $this->View('user/index');
    }
}


?>