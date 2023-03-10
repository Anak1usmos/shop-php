<?php

include_once ROOT . '/models/Product.php';


    class SiteController
    {

        public function actionIndex()
        {
            $PopularProducts = array();
            $PopularProducts = Product::getPopularProducts();

            $NewProducts = array();
            $NewProducts = Product::getNewProducts();

            $ExpectProducts = array();
            $ExpectProducts = Product::genExpectProducts();


            require_once(ROOT . '/views/layouts/index.php');

            return true;

        }

        public function actionAbout()
        {

            require_once(ROOT . '/views/about/about.php');
            return true;


        }

        public function actionSupport()
        {
            $question = '';

            if (isset($_POST['submit2'])) {

                $question = $_POST['question'];
                $result = Support::SubQuestion($question);
                print_r($result);
            }
            require_once(ROOT . '/views/support/support.php');
            return true;

        }
    }