<?php

class model_profile extends Model
{
    function __construct()
    {
        parent::__construct();
        Model::sesionInit();
        $session = Model::sessionOnGet('UserId');
        if ($session == false) {
            header('location:' . URL . 'login');
        }
    }

    function index()
    {

    }
}