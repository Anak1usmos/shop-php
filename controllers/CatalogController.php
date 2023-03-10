<?php

include_once ROOT. '/models/Catalog.php';


class CatalogController
{


    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        $catalogList = array();
        $catalogList = Catalog::getGameList();

        require_once(ROOT . '/views/catalog/catalog.php');



        return true;

    }

    public function actionView($id)
    {
        $product = Catalog::getGameItemByID($id);
        $specifications = Product::getPropertiesForAction($id);


        require_once(ROOT . '/views/product/game1.php');

        return true;


    }

    public function actionCategory($catId)
    {

        $categories = array();
        $categories = Category::getCategoriesList();
        $categoriesGoods = array();
        $categoriesGoods = Product::getCategoriesForProduct($catId);
        require_once(ROOT . '/views/genre/genre.php');
        return true;
    }



}
