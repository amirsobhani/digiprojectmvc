<?php

class addcomment extends Controller
{
    function __construct()
    {

    }

    function index($productId)
    {
        $commentParam = $this->model->index($productId);
        $comment = $this->model->getComment($productId);
        $productInfo = $this->model->getProductInfo($productId);
        $data = ['productInfo' => $productInfo, 'commentParam' => $commentParam, 'comment' => $comment];
        $this->View('addcomment/index', $data);
    }

    function setComment($productId)
    {
        $this->model->setComment($_POST, $productId);
    }
}