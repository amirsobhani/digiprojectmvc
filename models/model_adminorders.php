<?php

class model_adminorders extends Model
{
    public $allChildParenId = [];
    public $allAttrChild = [];

    function __construct()
    {
        parent::__construct();
    }
    function getOrders()
    {
        $sql = 'SELECT order_tbl.*, province.name AS provinceName, city.name AS nameCity, order_status_tbl.title AS statusTitle
        FROM order_tbl LEFT JOIN province ON order_tbl.province = province.id
        JOIN city ON order_tbl.city = city.id
        JOIN order_status_tbl ON order_tbl.status = order_status_tbl.id';
        $result = $this->doSelect($sql);
        return $result;
    }
}