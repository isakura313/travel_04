<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Db.php';


$mail = $_POST['mail'];
$password = $_POST['password'];
$mail = trim($mail);
$password = trim($login);


$hash_password = hash("sha256", $password);
$sql_activate = "SELECT activated FROM USERS WHERE email= '$mail'";
echo "Сейчас вы будете перенаправлены на главную страницу нашего ресурса";
echo "back back_timer";
$data = Db::get_single_element($sql_activate);
if($data == 1) {
            echo("Все круто, вы авторизированы на нашем ресурсе");
            session_start();
    $sql_login = "SELECT login FROM USERS WHERE email= '$mail'";
    $sql_status = "SELECT role FROM USERS WHERE email= '$mail'";

            $_SESSION['login'] = Db::get_single_element($sql_login);
            $_SESSION['role'] = Db::get_single_element($sql_status);
            header('Location: ' . $home);
            echo "вы успешно авторизированы!";
        } else {
            echo("Похоже, вы не подтвердили регистрацию на нашем ресурсе");
        }
