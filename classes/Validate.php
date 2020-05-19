<?php


class Validate
{
static  function checksize($file){
    if ($file >= 20000000){
        return  "<h5 class='has-text-danger'> Слишком большой файл!</h5>";
    }

}
static function validate_reg($login, $mail, $password){
      $pattern_login = '/\w{3,100}/';
      $pattern_mail = '/\w+@\w+\.\w+/';
      $pattern_password = '/\w{3,100}/';
    if (preg_match($pattern_login, $login) &&
        preg_match($pattern_mail, $mail) &&
        preg_match($pattern_password, $password)){
        return true;
        $password = hash('sha256', $password);
    } else{
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
}

}