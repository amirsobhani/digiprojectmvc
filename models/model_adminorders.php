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
        LEFT JOIN city ON order_tbl.city = city.id
        LEFT JOIN order_status_tbl ON order_tbl.status = order_status_tbl.id';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getOrder($orderId)
    {
        $sql = 'SELECT order_tbl.*, order_status_tbl.title AS statusTitle
        FROM order_tbl
        LEFT JOIN order_status_tbl ON order_tbl.status = order_status_tbl.id
        WHERE order_tbl.id=?';
        $result = $this->doSelect($sql, [$orderId], 'fetch');
        return $result;
    }

    function getStatus()
    {
        $sql = 'SELECT * FROM order_status_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }
}