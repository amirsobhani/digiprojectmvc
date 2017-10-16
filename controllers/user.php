<?php

class User extends Controller{
    function __construct()
    {
    }
    function index(){
        $this->View('user/index');
    }
}


?>