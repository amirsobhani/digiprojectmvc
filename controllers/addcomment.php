<?php

class addcomment extends Controller
{
    function __construct()
    {

    }

    function index($productId)
    {
        $indexData = $this->model->index($productId);
        $commentParam = $indexData[0];
        $comment = $indexData[1];
        $productInfo = $this->model->getProductInfo($productId);
        $data = ['productInfo' => $productInfo, 'commentParam' => $commentParam, 'comment' => $comment];
        $this->View('addcomment/index', $data);
    }

    function setComment()
    {
        $this->model->setComment($_POST);
    }
}