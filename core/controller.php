<?php

class Controller{
    function __construct()
    {

    }
    function View($viewUrl){
        require ('header.php');
        require ('views/'.$viewUrl.'.php');
        require ('footer.php');
    }
}














?>