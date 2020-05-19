<?php
$connect = new mysqli("localhost", "a0285934_travel",'123', "travel");
$connect -> set_charset("utf8mb4");
if($connect->connect_errno){
    die("Ошибка соединения: " . $connect->connect_errno);
}

?>