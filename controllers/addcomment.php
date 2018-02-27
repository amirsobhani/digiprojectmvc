<?php

class addcomment extends Controller
{
    function __construct()
    {

    }

    function index($productId)
    {
        $commentParam = $this->model->index($productId);
        $productInfo = $this->model->getProductInfo($productId);
        $data = ['productInfo' => $productInfo, 'commentParam' => $commentParam];
        $this->View('addcomment/index', $data);
    }
    function setComment()
    {
        $this->model->setComment($_POST);
    }
}