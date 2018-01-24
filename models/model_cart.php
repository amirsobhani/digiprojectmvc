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

        $sql ="SELECT c.count ,c.id as cartId, p.*, r.title as colorTitle, r.hex, g.title as guaranteeTitle, s.title as sellerTitle
        FROM cart_tbl c
        JOIN product_tbl p ON c.idproduct=p.id
        JOIN color_tbl r ON c.color=r.id
        JOIN guarantee_tbl g ON c.guarantee=g.id
        JOIN seller_tbl s ON c.seller=s.id
        WHERE cookie = ?";


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