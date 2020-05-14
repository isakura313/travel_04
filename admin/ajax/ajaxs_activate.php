<?php


require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
$user_id = $_GET['user'];

$sql_statement = "UPDATE users SET activated =1 WHERE id = '$user_id'";
if (DB::getdbconnect()->query($sql_statement)) {
    echo "Пользователь успешно активирован";
} else {
    echo "Во время активации возникли проблемы!";
}