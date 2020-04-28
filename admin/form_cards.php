<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/bd.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Validate.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Db.php';

$ans = $_POST['choose'];
$id = $_POST['id'];

$header = $_POST['header'];
$parag = $_POST['parag'];
$alt = $_POST['alt'];
$ordera = $_POST['ordera'];


if($ans == 'ins'){
    $upload_name = uniqid() . $_FILES['picture']['name'];
    $path = "img/upload/{$upload_name}";
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/img/upload/";
    $upload_file = $upload_dir . $upload_name;
    //сам процесс перемещения файла  на сервер
    //процесс валидизации размера файла

    echo (Validate::checksize($_FILES['picture']['size']));

    if (! $_FILES['picture']['type'] == 'jpg' ||  $_FILES['picture']['type'] == 'png' ){
        echo "<h5 class='has-text-danger'> файл неправильного формата!</h5>";
        die();
    }
    if(move_uploaded_file($_FILES['picture']['tmp_name'], $upload_file)){
        echo "<h5 class='has-text-primary'> Все ок</h5>";
    }
    else{
        echo "<h5 class='has-text-danger'> Что-то не так</h5>";
    }

        $sql = "INSERT INTO cards VALUES (NULL, '$path', '$header', '$parag', '$alt', '$ordera')";
        if(Db::getdbconnect()-> query($sql)){
        echo "Новая запись успешно загружена";
    } else{
        echo "Что-то пошло не так";
    }
    exit();
}
if($ans == 'del'){
    $id = trim($id);
    $sql_path = "SELECT img FROM cards WHERE id='$id'";
    $result = Db::getdbconnect()-> query($sql_path);
    while ($row = $result->fetch_assoc()){
        echo "картинка успешно удалена";
        echo "br";
        unlink($_SERVER['DOCUMENT_ROOT'].'/' .$row['img']);
    }
    $sql_del = "DELETE FROM cards WHERE  id ='$id'";
    if(Db::getdbconnect()-> query($sql_del)){
        echo "запись успешно удалена";
    } else{
        echo "Что-то пошло не так";
    }
    exit();
}


if($ans == "update"){
    $id = trim($id);
    $sql_path = "SELECT img FROM cards WHERE id='$id'";
    $result = Db::getdbconnect()-> query($sql_path);
    while ($row = $result->fetch_assoc()){
        unlink($_SERVER['DOCUMENT_ROOT'].'/'.  $row['img']);
        echo "<br>";
        echo "картинка успешно удалена";
    }
    $upload_name = uniqid() . $_FILES['picture']['name'];
    $path = "img/upload/{$upload_name}";
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/img/upload/";
    $upload_file = $upload_dir . $upload_name;

    echo (Validate::checksize($_FILES['picture']['size']));

    if (! $_FILES['picture']['type'] == 'jpg' ||  $_FILES['picture']['type'] == 'png' ){
        echo "<h5 class='has-text-danger'> файл неправильного формата!</h5>";
        die();
    }
    if(move_uploaded_file($_FILES['picture']['tmp_name'], $upload_file)){
        echo "<h3 class='has-text-primary'> Все ок</h3>";
    }
    else{
        echo "<h5 class='has-text-danger'> Что-то не так</h5>";
    }

    $sql = "UPDATE cards SET img = '$path', header = '$header', parag = '$parag', alt = '$alt', ordera='$ordera' WHERE  id = 1 ";
    if(Db::getdbconnect()-> query($sql)){
        echo "Новая запись успешно загружена";
    } else{
        echo "Что-то пошло не так";
    }


}




