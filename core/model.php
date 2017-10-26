<?php

class Model
{
    public static $conn = '';

    function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = "digiproject_db";
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password, $attr);
    }

    public static function getOption()
    {
        $sql = 'SELECT * FROM option_tbl';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $option = $stmt->fetchAll();
        $option_new = [];
        foreach ($option as $option) {
            $setting = $option['setting'];
            $value = $option['value'];
            $option_new[$setting] = $value;
        }
        return $option_new;

    }


}


?>