<?php

class model_cart extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function getCartProduct()
    {
        $cookie = self::getCartCookie();
        $sql = 'SELECT cart_tbl.*,product_tbl.* FROM cart_tbl JOIN product_tbl ON cart_tbl.idproduct=product_tbl.id WHERE cookie=?';
        $param = [$cookie];
        $result = $this->doSelect($sql, $param);

        foreach ($result as $key => $row) {
            $colorSql = 'SELECT color_tbl.*,cart_tbl.color FROM color_tbl JOIN cart_tbl ON color_tbl.id=cart_tbl.color WHERE cart_tbl.cookie=?';
            $params = [$cookie];
            $result2 = $this->doSelect($colorSql, $params);
            $result[$key]['colorCart'] = $result2;
        }
        print_r($result[1]);
        return $result;
    }
}