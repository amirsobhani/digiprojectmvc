<?php

class adminproduct extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $products = $this->model->getProduct();
        $data = ['products' => $products];
        $this->AdminView('admin/adminproduct/index', $data);
    }

    function addproduct($productId = '')
    {
        error_reporting(E_ERROR | E_PARSE);
        //E_WARNING |

        if (isset($_POST['title'])) {
            $this->model->insertProduct($_POST, $productId);
//            $productInfo = ['title' => $title, 'entitle' => $entitle, 'introduction' => $introduction, 'productmodel' => $productmodel, 'sellerid' => $sellerid, 'gurantees' => $gurantees, 'category' => $category, 'colorid' => $colorid, 'tedad' => $tedad, 'price' => $price, 'discount' => $discount];
        }
        $getSeller = $this->model->getSeller();
        $getGuarantee = $this->model->getGuarantee();
        $getCategory = $this->model->getCategory();
        $getColor = $this->model->getColor();
        $productInfo = $this->model->productiInfo($productId);
        $data = ['seller' => $getSeller, 'gurantee' => $getGuarantee, 'category' => $getCategory, 'color' => $getColor, 'product' => $productInfo];
        $this->AdminView('admin/adminproduct/addproduct', $data);
    }

    function deleteproduct()
    {
        $ids = $_POST['id'];
        $this->model->deleteProduct($ids);
        header('location:' . URL . 'adminproduct');
    }

    function productreview($idproduct)
    {
        error_reporting(E_ERROR | E_PARSE);
        $getProductReview = $this->model->getProductReview($idproduct);
        $data = ['productReview' => $getProductReview, 'idproduct' => $idproduct];
        $this->AdminView('admin/adminproduct/productreview', $data);
    }

    function addreview($id)
    {
        error_reporting(E_ERROR | E_PARSE);
        $this->model->addreview($_POST);
        $getReview = $this->model->getReview($id);
        $getProductReview = $this->model->getProductReview($id);
        $productInfo = $this->model->getProduct();
        $data = ['review' => $getReview, 'productInfo' => $productInfo, 'idproduct' => $id, 'getProductReview' => $getProductReview];
        $this->AdminView('admin/adminproduct/addreview', $data);

    }

    function editReview($id, $edit = '')
    {
        error_reporting(E_ERROR | E_PARSE);

        $this->model->updateReview($_POST);
        $getReview = $this->model->getReview($id);
        $productInfo = $this->model->getProduct();
        $data = ['review' => $getReview, 'productInfo' => $productInfo, 'idproduct' => $id, 'edit' => $edit];
        $this->AdminView('admin/adminproduct/addreview', $data);

    }

}