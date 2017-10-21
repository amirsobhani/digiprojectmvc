<?php

class model_index
{
    function __construct()
    {
    }

    function test()
    {
        return 10;
    }

    function getHorizontalSlider()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = "digiproject_db";
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password, $attr);
        $sql = 'SELECT * FROM horizontal_slider_tbl';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}


