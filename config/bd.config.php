<?php
$connect = new mysqli("192.168.199.2", "root",'', "travel");
$connect -> set_charset("utf8mb4");
if($connect->connect_errno){
    die("Ошибка соединения: " . $connect->connect_errno);
}

?>



