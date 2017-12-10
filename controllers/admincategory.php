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
        $data = ['category' => $category];
        $this->AdminView('admin/admincategory/index', $data);
    }

    function showChild($idcategory)
    {
        $catChild = $this->model->getChild($idcategory);
        $parent = $this->model->getParent($idcategory);
        $categoryInfo = $this->model->categoryInfo($idcategory);
        $data = ['category' => $catChild, 'parent' => $parent, 'categoryInfo' => $categoryInfo];
        $this->AdminView('admin/admincategory/index', $data);
    }

    function addcategory()
    {
        $category = $this->model->getCategory();
        $data = [$category];
        $this->AdminView('admin/admincategory/index', $data);
    }
}