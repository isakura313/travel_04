<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/bd.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/config/info.config.php';
$ans = $_GET['choose'];
$id = $_GET['id'];
$content = $_GET['content'];
// print_r($_GET);


if($ans == 'ins'){
    $sql = "INSERT INTO parag VALUES (NUll, '$content')";
    if ($connect-> query($sql)){
        echo "<h1> Новая запись успешно загружена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect-> close();
    exit();
}


if($ans == 'del'){
    $id  = trim($id);
    $sql = "DELETE FROM  parag WHERE id='$id'";
    if ($connect -> query($sql)){
        echo "<h1> Запись была успешна удалена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect-> close();
    exit();
}

if($ans == "update"){
    $id  = trim($id);
    $sql = "UPDATE parag SET content = '$content' WHERE id ='$id'";
    if ($connect -> query($sql)){
        echo "<h1> Запись была успешно отредактирована </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect-> close();
    exit();
}







