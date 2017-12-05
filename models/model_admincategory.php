<?php

class model_admincategory extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCategory()
    {
        $sql = 'SELECT * FROM category_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getChild($idcategory)
    {
        $sql = 'SELECT * FROM category_tbl WHERE parent = ?';
        $parent = [$idcategory];
        $result = $this->doSelect($sql, $parent);
        return $result;
    }
}