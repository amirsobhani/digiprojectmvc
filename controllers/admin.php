<?php

class Admin extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = [];
        $this->View('admin/index', $data, 'NoHeader', 'NoFooter');
    }
}