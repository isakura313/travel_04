<?php

require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
$user_id = $_GET['user'];

$sql_statement = "DELETE FROM users WHERE id = '$user_id'";
if(DB::getdbconnect()->query($sql_statement)){
    echo "Пользователь удален";
} else{
     echo "Во время удаления возникли проблемы";
}