<?php
require $_SERVER['DOCUMENT_ROOT'].'/travel/config/bd.config.php';

$back = "<p> <a href=\"javascript: history.back()\">Вернуться назад </a> </p>";


$back_timer = "<script>
setTimeout(() => window.history.back(), 5000)
</script>";

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

if($result = $connect->query("SELECT * FROM parag")){
    $parag_full = ['id'=>[], 'content' =>[]];
    while($row = $result->fetch_assoc()){
        array_push($parag_full['id'], $row['id']);
        array_push($parag_full['content'], $row['content']);
    }
}


if($result = $connect->query("SELECT * FROM reasons")){
    $reasons = ['smiles'=> [], 'content'=> []];
    while($row = $result->fetch_assoc()){
        array_push($reasons['smiles'], $row['smiles']);
        array_push($reasons['content'], $row['content']);
    }
}



if($result = $connect->query("SELECT * FROM cards")){
    $cards = ['img'=> [], 'header'=> [], 'parag'=>[], 'alt' => []];
    while($row = $result->fetch_assoc()){
        array_push($cards['img'], $row['img']);
        array_push($cards['header'], $row['header']);
        array_push($cards['parag'], $row['parag']);
        array_push($cards['alt'], $row['alt']);
    }
}



// $cards = ['Russia'=> ['img/moscow.png', 'Путешествия по России', 'Балалайки, матрешки, Кремль'], 'England'=>['img/big-ben.png', 'Путешествия по Англии', 'Разные страны, разные культуры'], 'Africa'=>['img/pyramids.png', 'Путешествия по Африке', 'Классные сафари, львы и много папуасов'], 'NorthAmerica'=>['img/south-america.png', 'Путешествия по Северной Америке', 'Конечно мы проедем всю Америку и тут будет еще немного контента'], 'SouthAmerica'=>['img/north-america.png', 'Путешествия по Южной Америке', 'Южная Америка нас ждет, там классно, бананы и землятрясения'], 'Australia'=>['img/kangaroo.png', 'Путешествия по Австралии', 'Австралия, кенгуру, летающих пауков там нет! Или есть. ПРиезжайте и проверьте'] ];


if($result = $connect->query("SELECT * FROM faq")){
    $faq = [];
    $i = 0;
    while($row = $result->fetch_assoc()){
        $temp = [];
        array_push($faq, $temp);
        array_push($faq[$i], $row['quest']);
        array_push($faq[$i], $row['answer']);
        $i++;
    }
}
// print_r($faq);  


// $faq = [['Какова стоимость путешествия','Стоимость путешествия зависит от страны'], ['Нужен ли загранник для получения визы?', 'Да, очень нужен'], ['Есть ли страховка в путешествии?', 'Нет, все будет нормально']];


