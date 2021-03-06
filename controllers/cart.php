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
        $cartPrice = $cart[1];
        $cartDiscount = $cart[2];
        $data = [$cartInfo, $cartPrice, $cartDiscount];
        echo json_encode($data);
    }

    function refCart()
    {
        $this->model->updateCart($_POST);
        $cart = $this->model->getCartProduct();
        $cartInfo = $cart[0];
        $cartPrice = $cart[1];
        $cartDiscount = $cart[2];
        $data = [$cartInfo, $cartPrice, $cartDiscount];
        echo json_encode($data);
    }
}


