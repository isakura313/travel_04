<?php


class Db
{
    public static function getdbconnect(){
        $connect = new mysqli("localhost", "pavel",'', "travel");
        $connect -> set_charset("utf8mb4");
        if($connect->connect_errno){
            die("Ошибка соединения: " . $connect->connect_errno);
        }
        return $connect;
    }
    public static function get_single_element($sql_statement){
        $result = self::getdbconnect()-> query($sql_statement);
        $data = $result->fetch_row();
        return $data[0];
}

public static function send_query($sql_statement){
    $result = self::getdbconnect()-> query($sql_statement);
    return $result;
}

}