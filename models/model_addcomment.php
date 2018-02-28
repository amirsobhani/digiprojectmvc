<?php

class model_addcomment extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function index($productId)
    {
        $productInfo = $this->getProductInfo($productId);
        $sql = 'SELECT * FROM comment_param_tbl WHERE idcategory=?';
        $result = $this->doSelect($sql, [$productInfo['idcategory']]);
        return $result;
    }

    function getProductInfo($productId)
    {
        $sql = 'SELECT * FROM product_tbl WHERE id=?';
        $result = $this->doSelect($sql, [$productId], 'fetch');
        return $result;
    }

    function setComment($data)
    {
        Model::sesionInit();
        $userId = $this->userId = Model::sessionOnGet('UserId');
        if ($userId == false) {
            header('location:' . URL . 'login');
        }
        $title = $data['title'];
        $posotive = $data['posotive'];
        $negative = $data['negative'];
        $content = $data['content'];
        $productId = $data['productId'];
        $date = $data['date'];
        $commentParam = $this->index($productId);
        $values = [];
        foreach ($commentParam as $row) {
            $paramId = $row['id'];
            $value = $_POST['value_'.$paramId];
            $values [$paramId] = $value;
        }

        $posotive = serialize($posotive);
        $negative = serialize($negative);
        $values = serialize($values);

        $sql = 'INSERT INTO comment_tbl (user, title, content, date, posotive, negative, idproduct, params) VALUES (?,?,?,?,?,?,?,?)';
        $params = [$userId, $title, $content, $date, $posotive, $negative, $productId, $values];
        $this->idu($sql, $params);

    }
}