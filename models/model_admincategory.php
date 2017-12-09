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

    function getParent($idcategory)
    {
        $categoryInfo = $this->categoryInfo($idcategory);
        $parent = $categoryInfo['parent'];
        $all_parent = [];

        while ($parent != 0) {
            $sql = 'SELECT * FROM category_tbl WHERE id = ?';
            $result = $this->doSelect($sql, [$parent], 1);
            array_push($all_parent, $result);
            $parent = $result ['parent'];
        }
        return $all_parent;

    }
    function categoryInfo($idcategory)
    {
        $sql = 'SELECT * FROM category_tbl WHERE id = ?';
        $result = $this->doSelect($sql, [$idcategory], 'fetch');
        return $result;
    }
}









