<?php
$title_info = "Оставить отзыв";

require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
session_start();

if(isset($_POST['topic'])) {
    $topic = $_POST['topic'];
    $content = $_POST['content'];
    $author = $_SESSION['login'];
    $created_at = date("Y-m-d H:i:s");


    $sql_state = "INSERT INTO feedback VALUES(NULL, '$topic', '$content','$author', '$created_at')";
    if (Db::send_query($sql_state)) {
        echo("Ваш отзыв был отправлен на модерацию");
    } else {
        echo "Видимо, были допущены какие-то ошибки";
    }
}

?>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
<script type="text/javascript">
    var onloadCallback = function() {
        alert("grecaptcha is ready!");
    };
</script>
<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Оставьте отзыв о нашей работе </h3>
        <hr class="login-hr">
            <figure class="image is-512x512">
                <img src="https://www.tui.ru/images-new/banners/banner-feedback.jpg" alt="">
            </figure>
        <form action="" method="POST" class="has-background-primary">
            <div class="g-recaptcha" data-sitekey="6LcRwPMUAAAAADXHSAI4HPWE_g6ZibmEIEH4hb1f"></div>

            <div class="field">
                <div class="box">
                    <label for="id" class="label"> Введите тему </label>
                    <input type="text" class="input is-medium" placeholder="Тема" name="topic">


                    <label for="content" class="label"> Введите  контент ссылки</label>
                    <textarea name="content" cols="70" rows="8" class="is-size-5" style="padding: 10px;"></textarea>
                </div>
            </div>

            <button class="button is-success  is-large is-pulled-right" type="submit">Отправить данные</button>


        </form>
    </div>

</section>

</body>

</html>
