<?php

class model_profile extends Model
{
    private $userId;

    function __construct()
    {
        parent::__construct();
        Model::sesionInit();
        $userId = $this->userId = Model::sessionOnGet('UserId');
        if ($userId == false) {
            header('location:' . URL . 'login');
        }
    }

    function index()
    {

    }

    function getProfile()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM users_tbl WHERE id=?';
        $params = [$userId];
        $result = $this->doSelect($sql, $params, 'fetch');
        return $result;
    }

    function getOrder()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM order_tbl WHERE user_id=?';
        $param = [$userId];
        $result = $this->doSelect($sql, $param);
        $i = 0;
        foreach ($result as $row) {
            $i++;
        }
        return [$result, $i];

    }

    function getMessage()
    {
        $userId = $this->userId;
        $sql = 'SELECT * FROM message_tbl WHERE user_id=? ORDER BY id DESC';
        $params = [$userId];
        $result = $this->doSelect($sql, $params);
        return $result;
    }

    function getComment()
    {
        $userId = $this->userId;
        $sql = 'SELECT comment_tbl.*, product_tbl.title AS productTitle FROM comment_tbl
                LEFT JOIN product_tbl ON comment_tbl.idproduct = product_tbl.id
                WHERE user_id=?';
        $result = $this->doSelect($sql, [$userId]);
        return $result;

    }


}