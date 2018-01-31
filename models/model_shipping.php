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

    function addAddress($data, $editAddressId)
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

        if ($editAddressId == '') {
            $sql = 'INSERT INTO user_address_tbl (user_id, user_name, province, city, postal_code, address, phone, mobile) VALUES (?,?,?,?,?,?,?,?)';
            $params = [$user_id, $user_name, $province, $city, $postal_code, $address, $phone, $mobile];
        } else {
            $sql = 'UPDATE user_address_tbl SET  user_name=?, province=?, city=?, postal_code=?, address=?, phone=?, mobile=? WHERE id=?';
            $params = [$user_name, $province, $city, $postal_code, $address, $phone, $mobile, $editAddressId];
        }

        $this->idu($sql, $params);
    }

    function getAddress()
    {
        Model::sesionInit();
        $userId = Model::sessionOnGet('UserId');

        $sql = 'SELECT user_address_tbl.*, province.name as provinceName, city.name as cityName 
        FROM user_address_tbl
        JOIN province ON province.id = user_address_tbl.province
        JOIN city ON city.id = user_address_tbl.city
        WHERE user_id=?';

        $param = [$userId];
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function AddressInfo($addressId)
    {
        $sql = 'SELECT * FROM user_address_tbl WHERE id = ?';
        $param = [$addressId];
        $result = $this->doSelect($sql, $param, 'fetch');
        return $result;
    }

    function getPostTtype()
    {
        $sql = 'SELECT * FROM post_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCartProduct()
    {
        $cookie = self::getCartCookie();
        $sql = 'SELECT * FROM cart_tbl WHERE cookie=?';
        $param = [$cookie];
        $result = $this->doSelect($sql, $param);
        return $result;

    }

    function deleteAddress($data)
    {
        $addressId = $data['addressId'];
        $sql = 'DELETE FROM user_address_tbl WHERE id=?';
        $param = [$addressId];
        $this->idu($sql, $param);
    }

    function sessionPost($data)
    {
        $dataPost = $data['dataPost'];
        $sql = 'SELECT * FROM post_tbl WHERE id=?';
        $param = [$dataPost];
        $result = $this->doSelect($sql, $param, 'fetch');
        parent::sesionInit();
        parent::sessionOnSet('post', serialize($result));

    }
}