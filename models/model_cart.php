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
        $sql = 'SELECT cart_tbl.count,cart_tbl.id as cartId,product_tbl.* FROM cart_tbl JOIN product_tbl ON cart_tbl.idproduct=product_tbl.id WHERE cookie=?';
        $param = [$cookie];
        $result = $this->doSelect($sql, $param);

        $finalCartPrice = 0;
        foreach ($result as $row) {
            $priceTotal = $row['price'] * $row['count'];
            $finalCartPrice = $finalCartPrice + $priceTotal;
        }

        $finalCartDiscount = 0;
        foreach ($result as $row) {
            $discountTotal = ($row['discount'] * $row['price']) / 100 * $row['count'];
            $finalCartDiscount = $finalCartDiscount + $discountTotal;
        }
//
//        foreach ($result as $key => $row) {
//            $colorSql = 'SELECT color_tbl.*,cart_tbl.color FROM color_tbl JOIN cart_tbl ON color_tbl.id=cart_tbl.color WHERE cart_tbl.cookie=?';
//            $params = [$cookie];
//            $result2 = $this->doSelect($colorSql, $params);
//            $result[$key]['colorCart'] = $result2;
//        }
//        print_r($result);
        return [$result, $finalCartPrice, $finalCartDiscount];
    }

    function deleteProductCart($id)
    {
        $sql = 'DELETE FROM cart_tbl WHERE id=?';
        $params = [$id];
        $this->idu($sql, $params);
    }
}