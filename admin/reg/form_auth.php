<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Db.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/User.php';


$mail = trim($_POST['mail']);
$password = trim($_POST['password']);
User::auth($mail, $password);