<?php

class Controller{
    function __construct()
    {

    }
    function View($viewUrl){

        require ('views/'.$viewUrl.'.php');
    }
}














?>