<?php

class Category
{
    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM category';
        $result = $db->query($sql);
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }

}