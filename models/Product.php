<?php

class Product
{




    public static function getPopularProducts()
    {
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, title, price, image FROM product '
            . 'WHERE is_popular = "1"'
            . 'ORDER BY id ');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }

        return $productsList;
    }

    public static function getNewProducts()
    {
        $db = Db::getConnection();
        $prodictsList = array();

        $result = $db->query('SELECT id, title, price, image FROM product '
            . 'WHERE is_new = "1"'
            . 'ORDER BY id ');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }

        return $productsList;



    }

    public static function genExpectProducts()
    {
        $db = Db::getConnection();
        $prodictsList = array();

        $result = $db->query('SELECT id, title, price, image FROM product '
            . 'WHERE is_expect = "1"'
            . 'ORDER BY id ');

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }

        return $productsList;


    }
    public static function getImage($id)
    {
        $noImage = 'no-image.jpg';
        $path = '/cat/';
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {

            return $pathToProductImage;
        }
        return $path . $noImage;
    }
    public static function getImageforProduct($id)
    {
        $noImage2 = 'no-image.jpg';
        $path2 = '/products/';
        $pathToProductImage2 = $path2 . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage2)) {

            return $pathToProductImage2;
        }
        return $path . $noImage2;


    }

    public static function getProdustsByIds($idsArray)
    {
        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);


        $sql = "SELECT * FROM product WHERE  id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }
    public static function getCategoriesForProduct($catId)
    {
        if ($catId) {



            $db = Db::getConnection();
            $sql = 'SELECT id, title, price FROM product'
                . " WHERE category_id = '$catId'"
                . "ORDER BY id DESC";



            $product = array();

            $result = $db->query($sql);

            $i = 0;
            while ($row = $result->fetch()) {
                $product[$i]['id'] = $row['id'];
                $product[$i]['title'] = $row['title'];
                $product[$i]['price'] = $row['price'];
                $i++;
            }
            return $product;
        }

    }
    public static function getPropertiesForAction($id){

        $properties= array();
        $db = Db::getConnection();
        $sql = " SELECT action.`value`, properties.`name` FROM `action` INNER JOIN `properties` ON (action.`property_id` = properties.`id`)
WHERE `product_id` = $id ";

        $result = $db->query($sql);
        $i = 0;

        while ($row = $result->fetch()) {
            $properties[$i]['name'] = $row['name'];
            $properties[$i]['value'] = $row['value'];
            $i++;
        }
        return $properties;
    }






}