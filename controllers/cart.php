<?php

class Cart extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $cart = $this->model->getCartProduct();
        $cartInfo = $cart[0];
        $cartPrice = $cart[1];
        $cartDiscount = $cart[2];
        $data = ['cart' => $cartInfo, 'cartPrice' => $cartPrice, 'cartDiscount' => $cartDiscount];
        $this->View('cart/index', $data);
    }

    function deleteProductCart($id)
    {
        $this->model->deleteProductCart($id);
        $cart = $this->model->getCartProduct();
        $cartInfo = $cart[0];
        echo json_encode($cartInfo);
    }
}


