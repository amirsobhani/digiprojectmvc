<?php

class Cart extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $cart = $this->model->getCartProduct();
        $data = ['cart' => $cart];
        $this->View('cart/index', $data);
    }
}


