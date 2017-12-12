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

    function addcategory($id = 0)
    {
        if (isset($_POST['parent']) and ($_POST['title'])) {
            $parentId = $_POST['parent'];
            $title = $_POST['title'];
            $this->model->addcetegory($title, $parentId);
        } else {
            $parentId = 0;
            $title = "";
        }

        $category = $this->model->getChild(0);
        $all_category = $this->model->getCategory();
        $categoryInfo = $this->model->categoryInfo($id);


        $data = ['title' => $title, 'parentId' => $parentId, 'category' => $category, 'all_category' => $all_category, 'categoryInfo' => $categoryInfo];
        $this->AdminView('admin/admincategory/addcategory', $data);
    }
}