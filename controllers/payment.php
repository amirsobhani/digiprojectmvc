<?php

class Payment extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $cart = $this->model->getCart();
        $data = ['cart' => $cart];
        $this->View('payment/index', $data);
    }
}