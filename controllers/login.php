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
}