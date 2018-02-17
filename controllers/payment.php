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

    function coupon()
    {
        $coupon = $this->model->coupon($_POST);

        $productCartInfo = $this->model->getCartProduct();
//        $cart = $productCartInfo[0];
        $cartPrice = $productCartInfo[1];
        $cartDiscount = $productCartInfo[2];
        $postInfo = $productCartInfo[3];
        $couponPrice = ($cartPrice * ((100 - $coupon) / 100));
        $total = $couponPrice + $postInfo['price'] - $cartDiscount;

//        $totalPrice = $total - $couponPrice;

        echo json_encode($total);
    }

    function setOrder()
    {
        $this->model->setOrder($_POST);
    }


}