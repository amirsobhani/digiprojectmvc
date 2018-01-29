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
        $postType = $this->model->getPostTtype();
        $cartProduct = $this->model->getCartProduct();

        $data = ['province' => $province, 'address' => $address, 'post' => $postType, 'cart' => $cartProduct];
        $this->View('shipping/index', $data);
    }

    function getCity()
    {
        $city = $this->model->getCity($_POST);
        echo json_encode($city);
    }

    function addAddress($editAddressId)
    {
        $this->model->addAddress($_POST, $editAddressId);
    }

    function editAddress($addressId)
    {
        $addressInfo = $this->model->AddressInfo($addressId);
        echo json_encode($addressInfo);
    }

    function deleteAddress()
    {
        $this->model->deleteAddress($_POST);
    }

}


