
<?php

    class Catalog
    {

        public static function getGameItemByID($id)
        {
            $id = intval($id);


            if ($id) {

                $db = Db::getConnection();

                $result = $db->query('SELECT * FROM product WHERE id=' . $id);
                $result->setFetchMode(PDO::FETCH_ASSOC);


                return $result->fetch();

            }

        }

        public static function getGameList() {

            $db = Db::getConnection();

            $catalogList = array();

            $result = $db->query('SELECT id, title, price FROM product');

            $i = 0;
            while($row = $result->fetch()) {
                $catalogList[$i]['id'] = $row['id'];
                $catalogList[$i]['title'] = $row['title'];
                $catalogList[$i]['price'] = $row['price'];

                $i++;

            }

            return $catalogList;
        }



    }