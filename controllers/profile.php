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
        $comment = $this->model->getComment();
        $orderInfo = $order[0];
        $orderCount = $order[1];

        $data = ['profile' => $profile, 'orderInfo' => $orderInfo, 'orderCount' => $orderCount, 'comment' => $comment];
        $this->View('profile/index', $data);
    }

    function getMessage()
    {
        $message = $this->model->getMessage();
        echo json_encode($message);
    }

    function EditProfile()
    {
        error_reporting(E_ERROR | E_PARSE);
        $province = $this->model->getProvince();
        $city = $this->model->getCity($_POST);
        $userInfo = $this->model->getUserInfo();
        $data = ['province' => $province, 'city' => $city, 'userInfo' => $userInfo];
        $this->View('profile/EditProfile', $data);
    }

    function ChangePass()
    {
        $this->View('profile/ChangePass');
    }
    function UpdatePass()
    {
        $this->model->ChangePass($_POST);
    }

    function getCity()
    {
        $city = $this->model->getCity($_POST);
        echo json_encode($city);
    }

    function UpdateProfile()
    {
        $this->model->UpdateProfile($_POST);
        header('location:EditProfile');
    }

}


