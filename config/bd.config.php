<?php
$connect = new mysqli("localhost", "pavel",'', "travel");
$connect -> set_charset("utf8mb4");
if($connect->connect_errno){
    die("Ошибка соединения: " . $connect->connect_errno);
}

?>