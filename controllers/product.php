<?php

class Product extends Controller {
    function __construct(){

    }
    function index(){
        $this->View('product/index');
    }

}

?>