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
        $data = ['products'=>$products];
        $this->AdminView('admin/adminproduct/index', $data);
    }
    function addproduct()
    {
        $this->AdminView('admin/adminproduct/addproduct');
    }
}