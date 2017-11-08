<?php

class Product extends Controller
{
    function __construct()
    {

    }

    function index($id)
    {
        $productInfo = $this->model->productInfo($id);
        $data = [$productInfo];
        $this->View('product/index', $data);
    }

    function tab($id, $idcategory)
    {
        $number = $_POST['number'];
        $number = $number + 1;
        $description = $this->model->description($id);
        $fanni = $this->model->fanni($idcategory);
        $data = [$description, $fanni];
        $this->View('product/ItemTab'.$number.'', $data, 'NoHeader', 'NoFooter');

    }
}

?>