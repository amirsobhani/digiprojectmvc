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
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

    public static function sesionInit()
    {
        @session_start();
    }

    public static function sessionOnSet($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function sessionOnGet($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function getCartCookie()
    {
        if (isset($_COOKIE['cart'])) {
            $cookie = $_COOKIE['cart'];
        } else {
            $expire = time() + 7 * 24 * 3600;
            $value = time().rand(10000, 100000000);
            setcookie('cart', $value, $expire, '/');
            $cookie = $value;
        }
        return $cookie;
    }
}


