<?php
require $_SERVER['DOCUMENT_ROOT'].'/travel/config/bd.config.php';



if($result = $connect-> query("SELECT * FROM keywords")){
    $keywords = [];
    while($row = $result->fetch_assoc()){
        array_push($keywords, $row['keywords']);
    }
} else{
    echo("произошла ошибка запроса");
}


if($result = $connect->query("SELECT * FROM anchors")){
    $anchors = ['anchor'=>[], 'content'=>[]];
    while($row = $result->fetch_assoc()){
        array_push($anchors["anchor"], $row['anchor']);
        array_push($anchors["content"], $row['content']);

    }
}

if($result = $connect->query("SELECT * FROM parag")){
    $parag = [];
    while($row = $result->fetch_assoc()){
        array_push($parag, $row['content']);
    }
}


if($result = $connect->query("SELECT * FROM reasons")){
    $reasons = ['smiles'=> [], 'content'=> []];
    while($row = $result->fetch_assoc()){
        array_push($reasons['smiles'], $row['smiles']);
        array_push($reasons['content'], $row['content']);
    }
}



// $reasons = [['💸', 'Дешево'], ['🐱', 'Сердито'], ['😸', 'Гиды умеют говорить по русски'], ['☠️','Полное сопровождение']];

$cards = ['Russia'=> ['img/moscow.png', 'Путешествия по России', 'Балалайки, матрешки, Кремль'], 'England'=>['img/big-ben.png', 'Путешествия по Англии', 'Разные страны, разные культуры'], 'Africa'=>['img/pyramids.png', 'Путешествия по Африке', 'Классные сафари, львы и много папуасов'], 'NorthAmerica'=>['img/south-america.png', 'Путешествия по Северной Америке', 'Конечно мы проедем всю Америку и тут будет еще немного контента'], 'SouthAmerica'=>['img/north-america.png', 'Путешествия по Южной Америке', 'Южная Америка нас ждет, там классно, бананы и землятрясения'], 'Australia'=>['img/kangaroo.png', 'Путешествия по Австралии', 'Австралия, кенгуру, летающих пауков там нет! Или есть. ПРиезжайте и проверьте'] ];

$faq = [['Какова стоимость путешествия','Стоимость путешествия зависит от страны'], ['Нужен ли загранник для получения визы?', 'Да, очень нужен'], ['Есть ли страховка в путешествии?', 'Нет, все будет нормально']];


