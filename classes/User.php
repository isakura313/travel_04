<?php

class User
{
    /**
     * Load a gravatar.
     */
    public static function get_gravatar($login='') {
        $sql_statement = "SELECT  email FROM  users  WHERE login='$login'";
        $result = Db::get_single_element($sql_statement);
        $default = "https://hostpapasupport.com/knowledgebase/wp-content/uploads/2018/04/1-13.png"; // Устанавливаем дефолтный аватар
        $email = md5(strtolower(trim($result)));
        $gravurl = "http://www.gravatar.com/avatar/$email?d=$default&s=80";
        return $gravurl;
    }


}