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

    function addcategory()
    {
        $title = $_POST['title'];
        $parent = $_POST['parent'];
        $this->model->addcetegory($title, $parent);

        $data = ['title' => $title, 'parent' => $parent];
        $this->AdminView('admin/admincategory/addcategory', $data);
    }
}