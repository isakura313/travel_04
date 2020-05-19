<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/User.php';

User::logout();
header('Location: ' . $home);