<?php

class model_payment extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCartProduct()
    {
        $cookie = self::getCartCookie();

        $sql = "SELECT c.count ,c.id as cartId, p.*, r.title as colorTitle, r.hex, g.title as guaranteeTitle, s.title as sellerTitle
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

        parent::sesionInit();
        $postInfo = parent::sessionOnGet('post');
        $postInfo = unserialize($postInfo);


        return [$result, $finalCartPrice, $finalCartDiscount, $postInfo];
    }

    function coupon($data)
    {
        $coupon = $data['coupon'];
        $sql = 'SELECT * FROM coupon_tbl WHERE coupon=?';
        $param = [$coupon];
        $result = $this->doSelect($sql, $param, 'fetch');
        return $result['discount'];
    }

    function setOrder($data)
    {
        $cartPrice = $data['cartPrice'];
        $cartDiscount = $data['cartDiscount'];
        $cart = $this->getCartProduct();
        $coupon = $data['coupon'];

        parent::sesionInit();
        $post = parent::sessionOnGet('post');
        $Address = parent::sessionOnGet('Address');
        $post = unserialize($post);
        $Address = unserialize($Address);
        $cart = serialize($cart[0]);
        print_r($cart);
        $postPrice = $post['price'];

        $mobile = $Address['mobile'];
        $addressInfo = $Address['address'];
        $postal_code = $Address['postal_code'];
        $city = $Address['city'];
        $province = $Address['province'];
        $user_family = $Address['user_name'];
        $user_id = $Address['user_id'];

//        $cartProductId = [];
//        foreach ($cart[0] as $row){
//            array_push($cartProductId, $row['id']);
//        }
//        $cartProductId = serialize($cartProductId);

        $sql = 'INSERT INTO order_tbl (user_id, user_family, cart, cart_price, cart_discount, coupon, user_address, city, province, mobile, postal_code, post_price) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
        $params = [$user_id, $user_family, $cart, $cartPrice, $cartDiscount,$coupon, $addressInfo, $city, $province, $mobile, $postal_code, $postPrice];
        $this->idu($sql, $params);

        //serialize parameter => cart

    }

}