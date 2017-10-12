<?php

//echo 'we are in index page<br>';
//
//echo $_GET['url'].'<br>';
$url = explode('/',$_GET['url']);

$controller = $url[0];
unset($url[0]);
$method = $url[1];
unset($url[1]);

$params = array_values($url);


require ('controllers/'.$controller.'.php');

$object = new $controller;

//$object->$method($params);
call_user_func_array([$object , $method] , $params);

?>