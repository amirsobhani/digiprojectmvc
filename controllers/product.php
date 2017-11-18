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
        $fanni = $this->model->fanni($idcategory, $id);

        $comment_param = $this->model->comment_param($idcategory, $id);
        $comment_param_name = $comment_param[0];
        $comment_param_rate = $comment_param[1];

        $getComment = $this->model->getComment($id);
        $data = [$description, $fanni, $comment_param_name, $getComment, $comment_param_rate];
        $this->View('product/ItemTab'.$number.'', $data, 'NoHeader', 'NoFooter');
    }
}

?>