<?php

class Cart
{
    public static function addProduct($id)
    {

        $id = intval($id);

        $productsInCart = array();


        if (isset($_SESSION['products'])) {

            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;




    }
    public static function countItems()
    {

        if (isset($_SESSION['products'])) {

            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {

            return 0;
        }
    }

    public static function getProducts()
    {

        if (isset($_SESSION['products'])) { // массив для кол-ва товаров 1
            return $_SESSION['products'];
        }
        return false;
    }

    //общая сумма
    public static function getTotalPrice($products)
    {

        $productsInCart = self::getProducts();

        $total = 0;
        if ($productsInCart) {

            foreach ($products as $item) {

                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }
    public static function deleteProduct($id)
    {

        $productsInCart = self::getProducts();

        if ($productsInCart[$id] != 1 ) {
            $productsInCart[$id] = $productsInCart[$id] -1;
            $_SESSION['products'] = $productsInCart;

        } else {
            unset($productsInCart[$id]);
            $_SESSION['products'] = $productsInCart;


        }


    }
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }



}