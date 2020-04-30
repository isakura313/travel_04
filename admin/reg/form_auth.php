<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Db.php';


$login = $_POST['name'];
$password = $_POST['password'];
$login = trim($login);
$password = trim($login);

$hash_password = hash("sha256", $password);
$sql_login = "SELECT * FROM USERS WHERE login= '$login'";

$result = Db::getdbconnect()-> query($sql_login);
while ($row = $result->fetch_assoc()){
    if($row['activated'] == 1){
        echo("Все круто, вы авторизированы на нашем ресурсе");
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
    } else{
        echo ("Похоже, вы не подтвердили регистрацию на нашем ресурсе");
    }
}
