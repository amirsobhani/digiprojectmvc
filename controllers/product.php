<?php

class Product extends Controller
{
    function __construct()
    {

    }

    function index($id)
    {
        $productInfo=$this->model->productInfo($id);
        $data = [$productInfo];
        $this->View('product/index', $data);
    }

}

?>