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
        $sql = 'SELECT cart_tbl.*,cart_tbl.id as cartId, cart_tbl.color as colorCart,product_tbl.* FROM cart_tbl JOIN product_tbl ON cart_tbl.idproduct=product_tbl.id WHERE cookie=?';
        $param = [$cookie];
        $result = $this->doSelect($sql, $param);
//print_r($result);
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

            $colorSql = 'SELECT cart_tbl.*, color_tbl.* FROM cart_tbl JOIN color_tbl WHERE cart_tbl.color = color.id ';
            $colorResult = $this->doSelect($colorSql);
            print_r($colorResult);


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

    function updateCart($data)
    {
        $value = $data['value'];
        $id = $data['id'];

        $cookie = self::getCartCookie();
        $countSql = 'UPDATE cart_tbl SET count=? WHERE cookie=? AND id=?';
        $param = [$value, $cookie, $id];
        $this->idu($countSql, $param);
    }

}