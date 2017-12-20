<?php

class adminproduct extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $products = $this->model->getProduct();
        $data = ['products' => $products];
        $this->AdminView('admin/adminproduct/index', $data);
    }

    function addproduct()
    {
        $getSeller = $this->model->getSeller();
        $getGuarantee = $this->model->getGuarantee();
        $getCategory = $this->model->getCategory();
        $getColor = $this->model->getColor();
        $data = ['seller' => $getSeller, 'gurantee' => $getGuarantee, 'category' => $getCategory, 'color' => $getColor];
        $this->AdminView('admin/adminproduct/addproduct', $data);
    }
}