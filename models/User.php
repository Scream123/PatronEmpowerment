<?php

class User
{
    /**
     * @return false|PDOStatement
     */
    public static function getUsers()

    {
        $db = Db::getConnection();


        $sql = 'SELECT * FROM ( SELECT u.*, (select max(rating) from comment c where c.user_id = u.id) as rating
                 FROM user u) ret where rating is not null order by rating DESC LIMIT 5';

        $result = $db->query($sql);

        return $result;
    }




}