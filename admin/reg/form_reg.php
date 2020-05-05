<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


$login = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$login = trim($login);
$mail = trim($email);

// Здесь у нас будут регулярные выражения

$pattern_login = '/\w{3,100}/';
$pattern_mail = '/\w+@\w+\.\w+/';
$pattern_password = '/\w{3,100}/'; #не забыть проапгрейдить до требований: как минимум 1 заглавная буква, 1 цифра и не менее 7 символов
# потом регулярные выражения в идеале надо перенести в отдельный класс Validate

if (preg_match($pattern_login, $login) &&
    preg_match($pattern_mail, $mail) &&
    preg_match($pattern_password, $password)) {

    $password = hash('sha256', $password);
//    echo $password;
    $sql_check = "SELECT id FROM users WHERE email = '$mail'";

    $result = Db::getdbconnect()->query($sql_check);
    $data = $result->fetch_row();
    if (isset($data[0])) {
        echo("<h1>  На ресурсе уже есть пользователь с такими данными </h1>");
//        echo "$back $back_timer";
    } else {
        $date_now = date("Y-m-d H:i:s");
        $sql_create_user = "INSERT INTO users VALUES (NULL, '$mail', '$login', '$password', 0, '$date_now', 'user')";
        if (Db::getdbconnect()->query($sql_create_user)) {
            echo " <h1> Пользователь успешно был зареган на этом ресурсе </h1>
                <h5> Нужно только подтвердить свою почту</h5>";

            // здесь у нас можно вставить посыл важного сообщения нашему пользователя о том, что

//        ECHO "что то явно пошло не так";
//        echo "$back $back_timer";
            $sql_get_id = "SELECT id from users WHERE email = '$mail'";
            $current_id = 0;
            if (Db::getdbconnect()->query($sql_get_id)) {
                $result = Db::getdbconnect()->query($sql_get_id);
                $data = $result->fetch_row();
                $current_id = $data[0];
                echo $current_id;
//        активация должна быть не по id, а по генерируемой соли
                $actual_link = "http://$_SERVER[HTTP_HOST]" . "/admin/reg/activate.php?id=" . $current_id;
//        echo $actual_link;
                $subject = "User Registration Activation Email";
                $content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";
                echo $content;
                $mailHeaders = "From: Admin\r\n";
                $toEmail = $mail;
                if (mail($toEmail, $subject, $content, $mailHeaders)) {
                    $message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";
                    $type = "success";
                }
            } else {
                echo "Error: {$sql_get_id} {Db::getdbconnect()->error}";
//        Db::getdbconnect()->close();
            }
        } else {
            echo "Error: {$sql_create_user} {Db::getdbconnect()->error}";
//        Db::getdbconnect()->close();
        }
    }
} else {
    echo "У вас что-то не заполнено по равилам этого форума";
    if (!preg_match($pattern_login, $login)) {
        echo "Возможно, ваш логин слишком короткий!";
    }
    if (!preg_match($pattern_mail, $mail)) {
        echo "Вы указали невалидную почту";
    }
    if (!preg_match($pattern_password, $password)) {
        echo "У вас неправильный пароль, который несоотвествует правилам этого форума!";
    }
}









