<?php

class Product extends Controller
{
    function __construct()
    {

    }

    function index($id)
    {
        $productInfo=$this->model->productInfo($id);
        $this->View('product/index');
    }

}

?>