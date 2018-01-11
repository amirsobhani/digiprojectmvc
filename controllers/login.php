<?php

class login extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->AdminView('login/index');
    }
}