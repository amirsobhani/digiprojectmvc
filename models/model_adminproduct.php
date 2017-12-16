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
}