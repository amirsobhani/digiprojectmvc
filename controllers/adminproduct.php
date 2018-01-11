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
//        error_reporting(E_ERROR | E_PARSE);
        //E_WARNING |
        if (isset($_POST['title'])) {
            $this->model->insertProduct($_POST, $productId, $_FILES);
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

    function deleteReview()
    {
        $ids = $_POST['id'];
        $idproduct = $_POST['idproduct'];
        $this->model->deleteReview($ids);
        header('location:' . URL . 'adminproduct/productreview/' . $idproduct . '');
    }

    function ProductAttr($idproduct, $edit = '')
    {
        error_reporting(E_ERROR | E_PARSE);

        $productInfo = $this->model->productiInfo($idproduct);
        $productAttr = $this->model->getProductAttr($productInfo['idcategory'], $idproduct);
        $attr = $this->model->getAttrId($idproduct, $productInfo['idcategory']);

        if ($edit == 'edit') {
            $attrId = [];
            foreach ($attr as $row) {
                array_push($attrId, $row['id']);
            }

            $this->model->editProductAttr($_POST, $idproduct, $attrId);
        } else {
            $this->model->addProductAttr($_POST, $idproduct);
        }


        $data = ['productInfo' => $productInfo, 'productAttr' => $productAttr, 'attr' => $attr];
        $this->AdminView('admin/adminproduct/productattr', $data);

    }

    function gallery($productId)
    {
        error_reporting(E_ERROR | E_PARSE);

        $gallery = $this->model->getGallery($productId, $_FILES);
        $productInfo = $this->model->productiInfo($productId);

        $data = ['gallery' => $gallery, 'productInfo' => $productInfo];

        $this->AdminView('admin/adminproduct/gallery', $data);
    }

    function deleteGallery($productId)
    {
        error_reporting(E_ERROR | E_PARSE);

        $this->model->deleteGallery($_POST, $productId);
        header('location: ' . URL . '/adminproduct/gallery/' . $productId);
    }

}









