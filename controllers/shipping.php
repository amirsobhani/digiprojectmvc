<?php

class Shipping extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $province = $this->model->province();
        $address = $this->model->getAddress();

        $data = ['province' => $province, 'address' => $address];
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

    function editAddress($addressId)
    {
        $addressInfo = $this->model->AddressInfo($addressId);
        echo json_encode($addressInfo);
    }
}


