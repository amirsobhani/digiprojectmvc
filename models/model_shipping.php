<?php

class model_shipping extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function province()
    {
        $sql = 'SELECT * FROM province';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCity($data)
    {
        $provinceId = $data['province'];
        $sql = 'SELECT * FROM city WHERE province_id=?';
        $param = [$provinceId];
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function addAddress($data)
    {
        $user_name = $data['user_name'];
        $province = $data['province'];
        $city = $data['city'];
        $postal_code = $data['postal_code'];
        $address = $data['address'];
        $phone = $data['phone'];
        $mobile = $data['mobile'];

        Model::sesionInit();
        $user_id = Model::sessionOnGet('UserId');

        $sql = 'INSERT INTO user_address_tbl (user_id, user_name, province, city, postal_code, address, phone, mobile) VALUES (?,?,?,?,?,?,?,?)';
        $params = [$user_id, $user_name, $province, $city, $postal_code, $address, $phone, $mobile];
        $this->idu($sql, $params);
    }
}