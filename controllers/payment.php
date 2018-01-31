<?php

class Payment extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $productCartInfo = $this->model->getCartProduct();
        $cart = $productCartInfo[0];
        $cartPrice = $productCartInfo[1];
        $cartDiscount = $productCartInfo[2];
        $postInfo = $productCartInfo[3];
//        $postInfo = unserialize($postInfo);

        $data = ['cart' => $cart, 'cartPrice' => $cartPrice, 'cartDiscount' => $cartDiscount, 'postInfo' => $postInfo];
        $this->View('payment/index', $data);
    }


}