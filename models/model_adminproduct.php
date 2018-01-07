<?php

class model_adminproduct extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getProduct()
    {
        $sql = 'SELECT * FROM product_tbl';
        $product = $this->doSelect($sql);
        return $product;
    }

    function getSeller()
    {
        $sql = 'SELECT * FROM seller_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getGuarantee()
    {
        $sql = 'SELECT * FROM guarantee_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCategory()
    {
        $sql = 'SELECT * FROM category_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getColor()
    {
        $sql = 'SELECT * FROM color_tbl';
        $result = $this->doSelect($sql);
        return $result;
    }

    function insertProduct($data = [], $productId = '', $file = [])
    {
        $title = $data['title'];
        $entitle = $data['en-title'];
        $introduction = $data['introduction'];
        $productmodel = $data['productmodel'];
        $sellerid = $data['sellerid'];
        $gurantees = $data['gurantees'];
        $category = $data['category'];
        $colorid = $data['colorid'];
        $tedad = $data['tedad'];
        $price = $data['price'];
//        $discount = $data['discount'];

        $gurantees = join(',', $gurantees);
        $colorid = join(',', $colorid);
        $sellerid = join(',', $sellerid);

                if ($productId == '') {
                    $sql = 'INSERT INTO product_tbl (title, idcategory, en_title,product_model,price,introduction,tedad_mojood,color,guarantee,seller) VALUES (?,?,?,?,?,?,?,?,?,?)';
                    $value = [$title, $category, $entitle, $productmodel, $price, $introduction, $tedad, $colorid, $gurantees, $sellerid];
                    $this->idu($sql, $value);
                    $productId = parent::$conn->lastInsertId();
                    mkdir('public/img/product gallery/' . $productId . '/');
                } else {
                    $sql = 'UPDATE product_tbl SET title=?, idcategory=?, en_title=?,product_model=?,price=?,introduction=?,tedad_mojood=?,color=?,guarantee=?,seller=? WHERE id=?';
                    $value = [$title, $category, $entitle, $productmodel, $price, $introduction, $tedad, $colorid, $gurantees, $sellerid, $productId];
                    $this->idu($sql, $value);
                }


        $file = $file['image'];
        $fileName = $file['name'];
        $fileType = $file['type'];
        $filePath = $file['tmp_name'];
        $fileError = $file['error'];
        $fileSize = $file['size'];
        $uploadOk = 1;
        $newName = 'product';
        $targetMain = 'public/img/product gallery/' . $productId . '/';
        if ($fileType != 'image/jpg' and $fileType != 'image/jpeg') {
            $uploadOk = 0;
            echo $fileError;
        }
        if ($fileSize > 5242880) {
            $uploadOk = 0;
            echo $fileError;
        }
        if ($uploadOk == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target1280 = $targetMain . $newName . '1280.' . $ext;
            move_uploaded_file($filePath, $target1280);

            $target220 = $targetMain . $newName . '220.' . $ext;
            $target350 = $targetMain . $newName . '350.' . $ext;
            $this->resize_image($target1280, $target220, 220, 220);
            $this->resize_image($target1280, $target350, 350, 350);
        }

    }

    function productiInfo($productId)
    {
        $sql = 'SELECT * FROM product_tbl WHERE id=?';
        $data = [$productId];
        $result = $this->doSelect($sql, $data, 'fetch');
        return $result;
    }

    function deleteProduct($ids = [])
    {
        $ids = join(',', $ids);
        $sql = "DELETE FROM product_tbl WHERE id IN (" . $ids . ")";
        $this->idu($sql);
        $reviewSql = 'DELETE FROM review_tbl WHERE idproduct IN (' . $ids . ')';
        $this->idu($reviewSql);
    }

    function getProductReview($idproduct)
    {
        $sql = 'SELECT * FROM review_tbl WHERE idproduct=?';
        $data = [$idproduct];
        $result = $this->doSelect($sql, $data);
        return $result;
    }

    function getReview($id)
    {
        $sql = 'SELECT * FROM review_tbl WHERE id=?';
        $data = [$id];
        $result = $this->doSelect($sql, $data);
        return $result;
    }

    function addreview($data = [])
    {
        $title = $data['title'];
        $description = $data['description'];
        $idproduct = $data['product'];
        $sql = 'INSERT INTO review_tbl (title, description, idproduct) VALUES (?,?,?)';
        $value = [$title, $description, $idproduct];
        $this->idu($sql, $value);
    }

    function updateReview($data = [])
    {
        $id = $data['id'];
        $title = $data['title'];
        $description = $data['description'];
        $idproduct = $data['product'];
        $sql = 'UPDATE review_tbl SET title=?,description=?,idproduct=? WHERE id=?';
        $value = [$title, $description, $idproduct, $id];
        $this->idu($sql, $value);
    }

    function deleteReview($ids = [])
    {
        $ids = join(',', $ids);
        $sql = "DELETE FROM review_tbl WHERE id IN (" . $ids . ")";
        $this->idu($sql);
    }

    function getProductAttr($idcategory, $productId)
    {
        $sql = 'SELECT attr_tbl.*,product_attr_tbl.value FROM attr_tbl LEFT JOIN product_attr_tbl ON attr_tbl.id=product_attr_tbl.idattr AND product_attr_tbl.idproduct=? WHERE 
idcategory=? AND parent!=0';
        $value = [$productId, $idcategory];
        $result = $this->doSelect($sql, $value);
        return $result;
    }

    function addProductAttr($data = [], $idproduct)
    {
        $ids = $data['id'];
        foreach ($ids as $id) {
            $sql = 'INSERT INTO product_attr_tbl (idproduct, idattr, value) VALUES (?,?,?)';
            $values = [$idproduct, $id, $data['value' . $id]];
            $this->idu($sql, $values);
        }
    }

    function editProductAttr($data = [], $idproduct, $attrIds)
    {
        $ids = $data['id'];
        foreach ($ids as $id) {
            $sql = 'UPDATE product_attr_tbl SET value=? WHERE idattr=?';
            $values = [$data['value' . $id], $id];
            $this->idu($sql, $values);
        }
    }

    function getAttrId($idproduct, $idcategory)
    {
        $sql = 'SELECT attr_tbl.*,product_attr_tbl.id FROM attr_tbl LEFT JOIN product_attr_tbl ON attr_tbl.id=product_attr_tbl.idattr AND product_attr_tbl.idproduct=? WHERE 
idcategory=? AND parent!=0';
        $values = [$idproduct, $idcategory];
        $result = $this->doSelect($sql, $values);
        return $result;

    }
}










