<?php

class model_addcomment extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function index($productId)
    {
        $productInfo = $this->getProductInfo($productId);

//        $sql = 'SELECT comment_param_tbl.*, product_tbl.title as productTitle, product_tbl.product_model
//        FROM comment_param_tbl
//        LEFT JOIN product_tbl ON comment_param_tbl.idcategory=product_tbl.idcategory';
        $sql = 'SELECT * FROM comment_param_tbl WHERE idcategory=?';
        $result = $this->doSelect($sql, [$productInfo['idcategory']]);
        return $result;
    }

    function getProductInfo($productId)
    {
        $sql = 'SELECT * FROM product_tbl WHERE id=?';
        $result = $this->doSelect($sql, [$productId], 'fetch');
        return $result;
    }
}