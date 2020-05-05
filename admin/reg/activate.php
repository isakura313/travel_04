<?php
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
echo $_GET['id'];
$id_user = $_GET['id'];
$sql_activate = "UPDATE users SET activated = '1' WHERE  id = '$id_user'";

if(Db::getdbconnect()->query($sql_activate) ){
    print("Ваш аккаунт был активирован");
} else{
    Db::getdbconnect()->close();
    print("произошла ошибка");
}

