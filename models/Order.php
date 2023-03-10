<?php


class Order
{
    //заказ
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO order2 (user_name, user_phone, user_comment, user_id, products) VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';

        $products = json_encode($products);

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }
    public static function getOrderById($userId)
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM order2 WHERE user_id = $userId";


       $result = $db->prepare($sql);




        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();


        return $result->fetch();




    }

}
