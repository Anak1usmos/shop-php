<?php

    class CabinetController
    {

        public function actionIndex()
        {
            $userId = User::checkLogged();


            $user = User::getUserById($userId);


            require_once(ROOT . '/views/cabinet/cabinet.php');

            return true;

        }

        public function actionEdit()
        {

            $userId = User::checkLogged();

            $user = User::getUserById($userId);

            $login = $user['login'];
            $password = $user['password'];

            $result = false;

            if (isset($_POST['submit'])) {

                $login = $_POST['login'];
                $password = $_POST['password'];

                $errors = false;

                if (!User::checkName($login)) {
                    $errors[] = 'Имя не должно быть короче 2-х символов';
                }


                if (!User::checkPassword($password)) {
                    $errors[] = 'Пароль не должен быть короче 6-х символов';
                }


                if ($errors == false) {
                    $result = User::edit($userId, $login, $password);
                }
            }



            require_once(ROOT . '/views/cabinet/edit.php');

            return true;

        }
        public function actionQuest()
        {
            if (!User::isGuest()) {

                $userId = User::checkLogged();
                $user = User::getUserById($userId);


            } else {

                $userId = false;
            }

            $order = array();
            $order = Order::getOrderById($userId) ;

            print_r($order);






            $productsQuantity = json_decode($order['products'], true);



            $productsIds = array_keys($productsQuantity);

            $products = Product::getProdustsByIds($productsIds);



            require_once(ROOT . '/views/cabinet/products.php');
            return true;
        }




    }