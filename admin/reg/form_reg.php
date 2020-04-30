<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Db.php';

$login = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$login = trim($login);
$mail = trim($email);

// Здесь у нас будут регулярные выражения

$pattern_login = '/\w{3,100}/';
$pattern_mail = '/\w+@\w+\.\w+/';
$pattern_password = '/\w{7,100}/'; #не забыть проапгрейдить до требований: как минимум 1 заглавная буква, 1 цифра и не менее 7 символов
# потом регулярные выражения в идеале надо перенести в отдельный класс Validate

if(preg_match($pattern_login, $login) &&
    preg_match($pattern_mail, $mail) &&
    preg_match($pattern_password, $password)){

    $password = hash('sha256', $password);
//    echo $password;
    $sql_check = "SELECT id FROM users here email = '$mail'";
    $result = Db::getdbconnect()-> query($sql_check);

    if($result){
       echo ("На ресурсе уже есть пользователь с такими данными");
       die();
    } else{
        echo ("все ок");
    }

    $sql_create_user = "INSERT INTO users VALUES (NULL, '$mail', '$login', '$password', 0)";
    if (Db::getdbconnect()-> query($sql_create_user)){
        echo " <h1> Пользователь успешно был зарегестрирован на этом ресурсе </h1>
                <h5> Нужно только подтвердить свою почту, проверьте почтовый ящик</h5>";
        echo "$back $back_timer";
    } else{
        echo "Error: {$sql_create_user} {Db::getdbconnect()->error}";
        Db::getdbconnect()->close();
    }

} else{
    echo "У вас что-то не заполнено по равилам этого форума";
    if (!preg_match($pattern_login, $login)){
        echo "Возможно, ваш логин слишком короткий!";
    }
    if (!preg_match($pattern_mail, $mail)){
        echo "Вы указали невалидную почту";
    }
    if (!preg_match($pattern_password, $password)){
        echo "У вас неправильный пароль, который несоотвествует правилам этого форума!";
    }


}

