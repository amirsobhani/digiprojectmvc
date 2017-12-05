<?php

class admincategory extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $category = $this->model->getCategory();
        $data = ['category'=>$category];
        $this->AdminView('admin/admincategory/index', $data);
    }

    function showChild($idcategory)
    {
        $catChild = $this->model->getChild($idcategory);
        $data = ['category'=>$catChild];
        $this->AdminView('admin/admincategory/index', $data);
    }
}