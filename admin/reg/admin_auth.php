<?php
$title_info = "Авторизация";
require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
?>
<section class="has-background-primary columns is-centered hero is-fullheight" id ="main">
    <form action="form_auth.php" class="column container is-one-quarter" method="POST">

        <div class="field">
            <label for="name" class="label"> Введите вашу почту на нашем ресурсе</label>
            <div class="control">
                <input type="text" class="input" name="mail" id="name" placeholder="Ваш логин" autocomplete="true">
            </div>
        </div>


        <div class="field">
            <label for="password" class="label"> Введите ваш пароль </label>
            <div class="control">
                <input type="password" class="input" name="password" id="password" placeholder="Ваш пароль" autocomplete="true">
            </div>
        </div>

        <button class="is-link button is-medium"  id="sub_auth" type="submit"> Отправить форму </button>
    </form>

</section>
<style>
    input[type='checkbox']{
        width: 30px;
    }
</style>
</body>
</html>