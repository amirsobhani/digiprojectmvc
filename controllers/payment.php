<?php

class Payment extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->View('payment/index');
    }
}