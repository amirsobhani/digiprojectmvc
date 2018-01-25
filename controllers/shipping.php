<?php

class Shipping extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $province = $this->model->province();
        $data = ['province'=> $province];
        $this->View('shipping/index', $data);
    }

    function getCity()
    {
        $city = $this->model->getCity($_POST);
        echo json_encode($city);
    }

    function addAddress()
    {
        $this->model->addAddress($_POST);
    }
}


?>