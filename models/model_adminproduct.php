<?php

class model_adminproduct extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getProduct()
    {
        $sql = 'SELECT * FROM product_tbl';
        $product = $this->doSelect($sql);
        return $product;
    }

    function getSeller()
    {
        $sql = 'SELECT * FROM seller_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getGuarantee()
    {
        $sql = 'SELECT * FROM guarantee_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCategory()
    {
        $sql = 'SELECT * FROM category_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getColor()
    {
        $sql = 'SELECT * FROM color_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }
}