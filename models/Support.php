<?php
class Support
{


    public static function SubQuestion($question)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO support (question) VALUE (:question)';

        $result = $db->prepare($sql);
        $result->bindParam(':question', $question, PDO::PARAM_STR);
        return $result->execute();

        }
}

