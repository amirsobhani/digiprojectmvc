<?php

class model_admincategory extends Model
{
    public $allChildParenId = [];

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

    function parentId($parent)
    {
        $sql = 'SELECT * FROM category_tbl WHERE title = ?';
        $result = $this->doSelect($sql, [$parent], 'fetch');
        return $result;
    }

    function addcetegory($title, $parent, $edit = "", $id)
    {

        if ($edit == "") {
            $sql = 'INSERT INTO category_tbl (title, parent) VALUE (?, ?)';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $parent);
            $stmt->execute();
        } else {
            $sql = 'UPDATE category_tbl SET title = ?,parent = ? WHERE id = ?';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $parent);
            $stmt->bindValue(3, $id);
            $stmt->execute();
        }
    }

    function getChildId($ids)
    {
        $all_child = [];
        foreach ($ids as $child) {
            $childeren = $this->getChild($child);
            foreach ($childeren as $childId) {
                $childId = $childId['id'];
                array_push($all_child, $childId);
            }
        }
        return $all_child;
    }

    function deleteCategory($ids = [])
    {
        $this->allChildParenId = array_merge($this->allChildParenId, $ids);
        while (sizeof($ids) > 0) {
            $childerenId = $this->getChildId($ids);
            $this->allChildParenId = array_merge($this->allChildParenId, $childerenId);
            $ids = $childerenId;
        }
        $ids = join(',', $this->allChildParenId);
        $sql = "DELETE FROM category_tbl WHERE id IN (" . $ids . ")";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
    }

    function getAttr($idcategory, $parent)
    {
        $sql = 'SELECT * FROM attr_tbl WHERE idcategory=? AND parent=?';
        $value = [$idcategory, $parent];
        $result = $this->doSelect($sql, $value);
        return $result;
    }

    function attrInfo($idcategory)
    {
        $sql = 'SELECT * FROM attr_tbl WHERE id=?';
        $value = [$idcategory];
        $result = $this->doSelect($sql, $value);
        return $result;
    }

    function getAttrInfo()
    {
        $sql = 'SELECT * FROM attr_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function attrParent($parent)
    {
        $sql = 'SELECT * FROM attr_tbl WHERE parent=?';
        $value = [$parent];
        $result = $this->doSelect($sql, $value);
        return $result;
    }

    function addAttr($data = [])
    {
        $title = $data['title'];
        $idcategory = $data['idcategory'];
        $parent = $data['parent'];

        $sql = 'INSERT INTO attr_tbl (title, idcategory, parent) VALUES (?,?,?)';
        $values = [$title, $idcategory, $parent];
        $this->idu($sql, $values);
    }
}









