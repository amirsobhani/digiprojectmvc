<?php

class model_index extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function test()
    {
        return 10;
    }

    function getHorizontalSlider()
    {

        $sql = 'SELECT * FROM horizontal_slider_tbl';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function getVerticalSlider()
    {
        $sql = 'SELECT * FROM product_tbl WHERE special = 1 ';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $row) {
            $discount = $row['discount'];
            $price = $row['price'];
            $totalPrice = ((100 - $discount) * $price) / 100;
            $result[$key]['price_total'] = $totalPrice;
        }
        $first_row = $result[0];
        $time_special = $first_row['time_special'];

        $sql = 'SELECT * FROM option_tbl WHERE setting = "special_time"';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $resultTime = $stmt->fetch();
        $duration_time = $resultTime['value'];
        $time_end = $time_special + $duration_time;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);

        return [$result, $date];
    }

    function mostView()
    {
        $sql = 'SELECT * FROM option_tbl WHERE setting = "limitScrollSlider"';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $resultLimit = $stmt->fetch();
        $limit = $resultLimit['value'];

        $sql = 'SELECT * FROM product_tbl ORDER BY mostview DESC limit ' . $limit . ' ';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $row) {
            $discount = $row['discount'];
            $price = $row['price'];
            $totalPrice = ((100 - $discount) * $price) / 100;
            $result[$key]['price_total'] = $totalPrice;
        }
        return $result;
    }
    function lastProduct()
    {
        $sql = 'SELECT * FROM option_tbl WHERE setting = "limitScrollSlider"';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $resultLimit = $stmt->fetch();
        $limit = $resultLimit['value'];

        $sql = 'SELECT * FROM product_tbl ORDER BY id DESC limit ' . $limit . ' ';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $key => $row) {
            $discount = $row['discount'];
            $price = $row['price'];
            $totalPrice = ((100 - $discount) * $price) / 100;
            $result[$key]['price_total'] = $totalPrice;
        }
        return $result;
    }
}


