<?php

class login extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->View('login/index');
    }

    function checkUser()
    {
        $this->model->checkUser($_POST);
        Model::sesionInit();
        $session = Model::sessionOnGet('UserId');
        if ($session == false) {
            header('location: ' . URL . 'login');
        } else {
            header('location: ' . URL . 'profile');
        }
    }
}