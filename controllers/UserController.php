<?php

    class UserController
    {
        public static function actionRegister()
        {
            $login ='';
            $email ='';
            $password ='';
            $result = false;


            if (isset($_POST['submit'])) {

                $login = $_POST['login'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $errors = false;

                if (!User::checkName($login)) {
                   $errors[] = 'Имя не должно быть короче 2-х символов';
                }
                if (!User::checkEmail($email)) {
                   $errors[] = 'Неправильный email';
                }

                if (!User::checkPassword($password)) {
                   $errors[] = 'Пароль не должен быть короче 6-х символов';
                }

                if (User::checkEmailExists($email)) {
                    $errors[] = 'Такой email уже используется';

                }

                if ($errors == false) {
                    $result = User::register($login, $email, $password);
                }
                }


            require_once(ROOT . '/views/user/register.php');
            return true;
            }
         public static function actionLogin()
         {
             $email = '';
             $password = '';


             if (isset($_POST['submit'])) {

                 $email = $_POST['email'];
                 $password = $_POST['password'];

                 $errors = false;

                 if (!User::checkEmail($email)) {
                     $errors[] = 'Неправильный email';
                 }

                 if (!User::checkPassword($password)) {
                     $errors[] = 'Пароль не должен быть короче 6-х символов';
                 }
                 $userId = User::checkUserData($email, $password);

                 if ($userId == false) {

                     $errors[] = 'Неправильные данные для входа на сайт';

                 } else {

                     User::auth($userId);

                     header("Location: /cabinet/");

                 }


             }
             require_once(ROOT . '/views/user/login.php');
             return true;
         }

         public static function actionLogout()
         {

             unset($_SESSION["user"]);
             header("Location: /");
         }





        }




