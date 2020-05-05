<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
session_start();
$_SESSION['login'] = '';

session_destroy();
header('Location: ' . $home);