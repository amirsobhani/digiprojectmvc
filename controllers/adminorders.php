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

    function editOrders($orderId)
    {
        $order = $this->model->getOrder($orderId);
        $status = $this->model->getStatus();
        $data = ['order' => $order, 'statusInfo' => $status];
        $this->AdminView('admin/adminorders/editOrders', $data);
    }
}