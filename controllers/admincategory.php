<?php

class admincategory extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = [];
        $this->AdminView('admin/admincategory/index', $data);
    }
}