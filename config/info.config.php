<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/bd.config.php';

$back = "<p> <a href=\"javascript: history.back()\">Вернуться назад </a> </p>";


$back_timer = "<script>
setTimeout(() => window.history.back(), 5000)
</script>";
$home =  "http://$_SERVER[HTTP_HOST]" . "/admin/admin.php";

if($result = $connect-> query("SELECT * FROM keywords")){
    $keywords = [];
    while($row = $result->fetch_assoc()){
        array_push($keywords, $row['keywords']);
    }
}



if($result = $connect->query("SELECT * FROM users")){
    $users = ['id'=>[],'email'=>[], 'login'=>[], 'role'=>[]];
    while($row = $result->fetch_assoc()){

        array_push($users["id"], $row['id']);
        array_push($users["email"], $row['email']);
        array_push($users["login"], $row['login']);
        array_push($users["role"], $row['role']);

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
    $cards = ['id'=>[],'img'=> [], 'header'=> [], 'parag'=>[], 'alt' => [], 'ordera'=>[]];
    while($row = $result->fetch_assoc()){
        array_push($cards['id'], $row['id']);
        array_push($cards['img'], $row['img']);
        array_push($cards['header'], $row['header']);
        array_push($cards['parag'], $row['parag']);
        array_push($cards['alt'], $row['alt']);
        array_push($cards['ordera'], $row['ordera']);
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

if($result = $connect->query("SELECT * FROM feedback WHERE review = 1")){
    $feedback = ['topic'=>[], 'content' => [], 'author'=>[], 'created_at'=>[]];
    while($row = $result->fetch_assoc()){
        array_push($feedback['topic'], $row['topic']);
        array_push($feedback['content'], $row['content']);
        array_push($feedback['author'], $row['author']);
        array_push($feedback['created_at'], $row['created_at']);
    }
}

if($result = $connect->query("SELECT * FROM anchors")){
    $anchors_full = ['id'=>[],'anchor'=>[], 'content'=>[], 'ordera'=>[]];
    while($row = $result->fetch_assoc()){

        array_push($anchors_full["id"], $row['id']);
        array_push($anchors_full["anchor"], $row['anchor']);
        array_push($anchors_full["content"], $row['content']);
        array_push($anchors_full["ordera"], $row['ordera']);

    }
}




// $faq = [['Какова стоимость путешествия','Стоимость путешествия зависит от страны'], ['Нужен ли загранник для получения визы?', 'Да, очень нужен'], ['Есть ли страховка в путешествии?', 'Нет, все будет нормально']];


