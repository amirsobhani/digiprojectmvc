<?php

class Profile extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $profile = $this->model->getProfile();
        $order = $this->model->getOrder();
        $orderInfo = $order[0];
        $orderCount = $order[1];

        $data = ['profile' => $profile, 'orderInfo' => $orderInfo, 'orderCount' => $orderCount];
        $this->View('profile/index', $data);
    }

    function getMessage()
    {
        $message = $this->model->getMessage();
        echo json_encode($message);
    }

}


