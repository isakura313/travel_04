<?php
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/User.php';
$id_user = $_GET['id'];
User::activate($id_user);

