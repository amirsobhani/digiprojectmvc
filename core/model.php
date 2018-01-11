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

    function doSelect($sql, $values = [], $fetch = '', $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            $result = $stmt->fetchAll($fetchStyle);
        } else {
            $result = $stmt->fetch($fetchStyle);
        }
        return $result;
    }

    function idu($sql, $values = [])
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
    }

    public static function getOption()
    {
        $sql = 'SELECT * FROM option_tbl';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $options = $stmt->fetchAll();
        $option_new = [];
        foreach ($options as $option) {
            $setting = $option['setting'];
            $value = $option['value'];
            $option_new[$setting] = $value;
        }
        return $option_new;

    }

    function calculateDiscount($price, $discount)
    {
        $price_discount = ($discount * $price) / 100;
        $totalPrice = $price - $price_discount;
        return [$price_discount, $totalPrice];
    }

    function resize_image($file, $pathToSave, $w, $h, $crop = FALSE)
    {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width - ($width * abs($r - $w / $h)));
            } else {
                $height = ceil($height - ($height * abs($r - $w / $h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w / $h > $r) {
                $newwidth = $h * $r;
                $newheight = $h;
            } else {
                $newheight = $w / $r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        imagejpeg($dst, $pathToSave, 95);

        return $dst;
    }

    function sesionInit()
    {
        session_start();
    }

    function sessionOnSet($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    function sessionOnGet($name)
    {
        if (isset($_SESSION[$name])) {
            return $name;
        } else {
            return false;
        }
    }
}


