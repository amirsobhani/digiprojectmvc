<?php

class adminorders extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $orders = $this->model->getOrders();
        $data = ['orders' => $orders];
        $this->AdminView('admin/adminorders/index', $data);
    }
}