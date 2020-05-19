<?php

require $_SERVER['DOCUMENT_ROOT'] . '/classes/Validate.php';

class User
{
    public $login;
    public $email;
    public $password;
    public $activated;
    public $role;

    /**
     * функция Конструктор, в которую  можно передать все свойства объекта
     * @param $login - здесь у нас логин пользователя, строка от 3 до 35 без спецсимволов
     * @param $email - здесь у нас почта пользователя, просто почта
     * @param $password - пароль. От 3 знаков, но потом допишу
     * @param $activated - Bool. Показывает, активирован пользователь или нет
     * @param $role - какой роль у нашего пользователя. Всего есть 3 роли: user, admin или banned
     */
    public function __construct($login, $email, $password, $activated, $role)
    {
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
        $this->activated = $activated;
        $this->role = $role;
    }

    /**
     * Load a gravatar.
     */
    public static function get_gravatar($login='') {
        $sql_statement = "SELECT  email FROM  users  WHERE login='$login'";
        $result = Db::get_single_element($sql_statement);
        $default = "https://hostpapasupport.com/knowledgebase/wp-content/uploads/2018/04/1-13.png"; // Устанавливаем дефолтный аватар
        $email = md5(strtolower(trim($result)));
        $gravurl = "http://www.gravatar.com/avatar/$email?d=$default&s=80";
        return $gravurl;
    }

    public  function login()
    {
        if (Validate::validate_reg($this->login, $this->email, $this->password)) {
            $this->password= hash("sha256", $this->password); #хешируем наш пароль
            $created_at = date("Y-m-d H:i:s");
            $sql_check = "SELECT id FROM users WHERE email = '$this->email'";
            if ($result = Db::get_single_element($sql_check)) {
                echo("<h1>  На ресурсе уже есть пользователь с такими данными </h1>");
//        echo "$back $back_timer";
            } else {
                $sql_create_user = "INSERT INTO users VALUES (NULL, '$this->email', '$this->login', '$this->password', '$this->activated', '$created_at', '$this->role')";
                if (Db::getdbconnect()->query($sql_create_user)) {
                    echo " <h1> Пользователь успешно был зарегистрирован на этом ресурсе </h1>
                <h5> Нужно только подтвердить свою почту</h5>
                <h5>Обязательно проверьте папку со спамом</h5>
                ";
                }
                $sql_get_id = "SELECT id from users WHERE email = '$this->email'";
                if (Db::getdbconnect()->query($sql_get_id)) {
                    $current_id = Db::get_single_element($sql_get_id);
                    $actual_link = "http://$_SERVER[HTTP_HOST]" . "/admin/reg/activate.php?id=" . $current_id;
                    $subject = "Письмо, по которому вы сможете активировать ваш аккаунт";
                    $content = "Нажмите сюда чтобы активировать ваш аккаунт. <a href='" . $actual_link . "'>" . $actual_link . "</a>";
                    echo $content;
                    $mailHeaders = "From: Admin\r\n";
                    $toEmail = $this->email;
                    if (mail($toEmail, $subject, $content, $mailHeaders)) {
                        $message = "Вы зарегистрировались на нашем ресурса. Кликните по ссылке чтобы активировать ваш аккаунт";
                        $type = "success";
                    }
                } else {
                    echo "Error: {$sql_get_id} {Db::getdbconnect()->error}";
                }
        }
    }
    }
    public static function auth($email, $password){
        $hash_password = hash("sha256", $password); #хешируем наш пароль
        $sql_get_password = "SELECT password FROM users WHERE email = '$email'";
        $orig_password = Db::get_single_element($sql_get_password);
        if($hash_password == $orig_password){
            $sql_activate = "SELECT activated FROM users WHERE email= '$email'";
        $data = Db::get_single_element($sql_activate);
        if($data == 1) {
            session_start();
            $sql_login = "SELECT login FROM users WHERE email= '$email'";
            $sql_status = "SELECT role FROM users WHERE email= '$email'";
            #потом нужно переписать, потому что лучше сделать 1 запрос, но немного поработать в PHP
            #чем два запроса к базе, которая непонятно с какой скоростью собирается работать
            $_SESSION['login'] = Db::get_single_element($sql_login);
            $_SESSION['role'] = Db::get_single_element($sql_status);
//            header('Location: ' . $home);
            echo " <h3> Вы успешно авторизировались на нашем ресурсе! С чем я вас и поздравляю!!! </h3>";
        } else {
            echo(" <h4> Похоже, вы не подтвердили регистрацию на нашем ресурсе! </h4> ");
        }
        } else{
            echo "Похоже, пароль или почта неверные";

        }
    }

    public static function logout(){
        session_start();
        $_SESSION['login'] = '';
        session_destroy();
    }
    public static function activate($id){
        $sql_activate = "UPDATE users SET activated = '1' WHERE  id = '$id'";
        if(Db::getdbconnect()->query($sql_activate) ){
            print("Ваш аккаунт был активирован");
        } else{
            Db::getdbconnect()->close();
            print("произошла ошибка");
        }
    }


}