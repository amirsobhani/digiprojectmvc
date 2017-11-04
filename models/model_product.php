<?php

class model_product extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function productInfo($id)
    {
        $sql = 'SELECT * FROM product_tbl WHERE id=?';
        $result = $this->doSelect($sql, [$id], 1);

        $price = $result['price'];
        $discount = $result['discount'];
        $price_discount = $this->calculateDiscount($price, $discount);
        $result['discount'] = $price_discount[0];
        $result['total_price'] = $price_discount[1];

        $first_row = $result;
        $time_special = $first_row['time_special'];

        $sql = 'SELECT * FROM option_tbl WHERE setting = "special_time"';
        $resultTime = $this->doSelect($sql,[],1 );
        $duration_time = $resultTime['value'];
        $time_end = $time_special + $duration_time;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);
        $result['date_special'] = $date;

        $colors = $result['color'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);

        $all_color = [];
        foreach ($colors as $color) {
            $colorInfo = $this->colorInfo($color);
            array_push($all_color, $colorInfo);
        }
        $result['all_color'] = $all_color;

        $guarantees = $result['guarantee'];
        $guarantees = explode(',', $guarantees);
        $guarantees = array_filter($guarantees);

        $all_guarantees = [];
        foreach ($guarantees as $guarantee) {
            $guaranteeInfo = $this->guaranteeInfo($guarantee);
            array_push($all_guarantees, $guaranteeInfo);
        }
        $result['guarantee'] = $all_guarantees;

        $sellers = $result['seller'];
        $sellers = explode(',', $sellers);
        $sellers = array_filter($sellers);

        $all_sellers = [];
        foreach ($sellers as $seller) {
            $sellerInfo = $this->sellerInfo($seller);
            array_push($all_sellers, $sellerInfo);
        }
        $result['seller'] = $all_sellers;


        return $result;
    }

    function colorInfo($id)
    {
        $sql = 'SELECT * FROM color_tbl WHERE id = ?';
        $result = $this->doSelect($sql, [$id], 1);
        return $result;
    }

    function guaranteeInfo($id)
    {
        $sql = 'SELECT * FROM guarantee_tbl WHERE id = ?';
        $result = $this->doSelect($sql, [$id], 1);
        return $result;
    }

    function sellerInfo($id)
    {
        $sql = 'SELECT * FROM seller_tbl WHERE id = ?';
        $result = $this->doSelect($sql, [$id], 1);
        return $result;
    }

}