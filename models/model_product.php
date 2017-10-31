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
        $colors = $result['color'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);
        $all_color = [];
        foreach ($colors as $color){
            $colorInfo = $this->colorInfo($color);
            array_push($all_color, $colorInfo);
        }
        $result['all_color'] = $all_color;
        return $result;
    }

    function colorInfo($id)
    {
        $sql = 'SELECT * FROM color_tbl WHERE id = ?';
        $result = $this->doSelect($sql,[$id],1);
        return $result;
    }
}