<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';

$login = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$login = trim($login);
$mail = trim($email);

// Здесь у нас будут регулярные выражения


