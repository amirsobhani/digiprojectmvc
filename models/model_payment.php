<?php

class model_payment extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCart()
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
        return $result;
    }
}