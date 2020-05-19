<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/User.php';


$login = trim($_POST['name']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$activated = 0;
$role = 'user';
$new_user = new User($login, $email, $password, $activated, $role);
$new_user->login();



// Здесь у нас будут регулярные выражения











