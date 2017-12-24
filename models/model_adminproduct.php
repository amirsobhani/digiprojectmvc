<?php

class model_adminproduct extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getProduct()
    {
        $sql = 'SELECT * FROM product_tbl';
        $product = $this->doSelect($sql);
        return $product;
    }

    function getSeller()
    {
        $sql = 'SELECT * FROM seller_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getGuarantee()
    {
        $sql = 'SELECT * FROM guarantee_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCategory()
    {
        $sql = 'SELECT * FROM category_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getColor()
    {
        $sql = 'SELECT * FROM color_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function insertProduct($data = [], $productId = '')
    {
        $title = $data['title'];
        $entitle = $data['en-title'];
        $introduction = $data['introduction'];
        $productmodel = $data['productmodel'];
        $sellerid = $data['sellerid'];
        $gurantees = $data['gurantees'];
        $category = $data['category'];
        $colorid = $data['colorid'];
        $tedad = $data['tedad'];
        $price = $data['price'];
//        $discount = $data['discount'];


        $gurantees = join(',', $gurantees);
        $colorid = join(',', $colorid);
        $sellerid = join(',', $sellerid);

        if ($productId == '') {
            $sql = 'INSERT INTO product_tbl (title, idcategory, en_title,product_model,price,introduction,tedad_mojood,color,guarantee,seller) VALUES (?,?,?,?,?,?,?,?,?,?)';
            $value = [$title, $category, $entitle, $productmodel, $price, $introduction, $tedad, $colorid, $gurantees, $sellerid];
            $this->idu($sql, $value);
        } else {
            $sql = 'UPDATE product_tbl SET title=?, idcategory=?, en_title=?,product_model=?,price=?,introduction=?,tedad_mojood=?,color=?,guarantee=?,seller=? WHERE id=?';
            $value = [$title, $category, $entitle, $productmodel, $price, $introduction, $tedad, $colorid, $gurantees, $sellerid, $productId];
            $this->idu($sql, $value);
        }
    }

    function productiInfo($productId)
    {
        $sql = 'SELECT * FROM product_tbl WHERE id=?';
        $data = [$productId];
        $result = $this->doSelect($sql, $data, 'fetch');
        return $result;
    }

    function deleteProduct($ids = [])
    {
        $ids = join(',', $ids);
        $sql = "DELETE FROM product_tbl WHERE id IN (" . $ids . ")";
        $this->idu($sql);
    }

}