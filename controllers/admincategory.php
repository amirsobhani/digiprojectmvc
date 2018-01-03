<?php

class admincategory extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $category = $this->model->getChild(0);
        $all_category = $this->model->getCategory();

        $data = ['category' => $category, 'all_category' => $all_category];
        $this->AdminView('admin/admincategory/index', $data);
    }

    function showChild($idcategory)
    {
        $catChild = $this->model->getChild($idcategory);
        $parent = $this->model->getParent($idcategory);
        $categoryInfo = $this->model->categoryInfo($idcategory);
        $all_category = $this->model->getCategory();


        $data = ['category' => $catChild, 'parent' => $parent, 'categoryInfo' => $categoryInfo, 'all_category' => $all_category];
        $this->AdminView('admin/admincategory/index', $data);
    }

    function addcategory($id = 0, $edit = '')
    {
        if (isset($_POST['parent']) and ($_POST['title'])) {
            $parentId = $_POST['parent'];
            $title = $_POST['title'];
            $this->model->addcetegory($title, $parentId, $edit, $id);
        } else {
            $parentId = 0;
            $title = "";
        }

        $category = $this->model->getChild(0);
        $all_category = $this->model->getCategory();
        $categoryInfo = $this->model->categoryInfo($id);


        $data = ['title' => $title, 'parentId' => $parentId, 'category' => $category, 'all_category' => $all_category, 'categoryInfo' => $categoryInfo];
        $this->AdminView('admin/admincategory/index', $data);
    }

    function deleteCategory($idcategory)
    {
        $ids = $_POST['id'];
        $this->model->deleteCategory($ids);
        if ($idcategory == 0) {
            header('location:' . URL . 'admincategory');
        } else {
            header('location:' . URL . 'admincategory/showChild/' . $idcategory . '');
        }
    }

    function ShowAttr($idcategory, $parent = 0)
    {
        error_reporting(E_ERROR | E_PARSE);

        $attr = $this->model->getAttr($idcategory, $parent);
        $categoryInfo = $this->model->categoryInfo($idcategory);
        $attrInfo = $this->model->attrInfo($parent);
        $getAttrInfo = $this->model->getAttrInfo();
        $attrParent = $this->model->attrParent(0, $idcategory);
        $data = ['attr' => $attr, 'categoryInfo' => $categoryInfo, 'attrInfo' => $attrInfo, 'getAttrInfo' => $getAttrInfo, 'attrParent' => $attrParent];
        $this->AdminView('admin/admincategory/ShowAttr', $data);
    }

    function addAttr($categoryInfo, $attrInfo)
    {
        $this->model->addAttr($_POST);
        header('location:' . URL . 'admincategory/ShowAttr/' . $categoryInfo . '/' . $attrInfo . '');
    }

    function updateAttr($categoryId)
    {
        $this->model->updateAttr($categoryId, $_POST);
        $parent = $_POST['parent'];
        header('location:' . URL . 'admincategory/ShowAttr/' . $categoryId . '/' . $parent . '');
    }

    function deleteAttr($idcategory, $parentId)
    {
        $ids = $_POST['id'];
        $this->model->deleteAttr($ids);
        if ($idcategory == 0) {
            header('location:' . URL . 'admincategory');
        } else {
            header('location:' . URL . 'admincategory/ShowAttr/' . $idcategory . '/' . $parentId );
        }
    }
}