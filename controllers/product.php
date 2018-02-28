<?php

class Product extends Controller
{
    function __construct()
    {

    }

    function index($id)
    {
        $productInfo = $this->model->productInfo($id);
        $productGallery = $this->model->getGallery($id);
        $data = [$productInfo, $productGallery];
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

        $getQuestion = $this->model->getQuestion ($id);
        $question = $getQuestion[0];
        $answer = $getQuestion[1];

        $productInfo = $this->model->productInfo($id);

        $data = [$description, $fanni, $comment_param_name, $getComment, $comment_param_rate, $question, $answer, $productInfo];
        $this->View('product/ItemTab' . $number . '', $data, 'NoHeader', 'NoFooter');
    }

    function addToCart($productId, $sellerId, $colorId, $guranteeId)
    {
        $this->model->addToCart($productId, $sellerId, $colorId, $guranteeId);

    }

}





