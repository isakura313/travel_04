<?php
$title_info = "Регистрация";
require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
?>
<section class="has-background-success columns is-centered hero is-fullheight" id ="main">
    <form action="form_reg.php" class="column container is-one-quarter" method="POST">

        <div class="field">
            <label for="name" class="label"> Введите ваше имя</label>
            <div class="control">
                <input type="text" class="input" name="name" id="name" placeholder="Ваше имя!">
            </div>
            <p class="help is-size-6 has-text-centered"> Имя пользователя не должно быть короче 3 символов</p>
        </div>

        <div class="field">
            <label for="email" class="label"> Введите вашу почту</label>
            <div class="control">
                <input type="email" class="input" name="email" id="email" placeholder="Ваш email!">
            </div>
        </div>

        <div class="field">
            <label for="password" class="label"> Введите ваш пароль </label>
            <div class="control">
                <input type="password" class="input" name="password" id="password" placeholder="Ваш пароль!">
            </div>
            <p class="help is-size-6 has-text-centered"> Пароль не меньше 7 символов</p>
        </div>


        <div class="field">
            <label for="dubl" class="label"> Введите снова ваш пароль </label>
            <div class="control">
                <input type="password" class="input" name="dubl" id="dubl" placeholder="Повтор пароля">
            </div>
        </div>


        <div class="field">
            <div class="control">
                <label for="quest" class="checkbox is-2">
                    <input type="checkbox" name="quest" required>
                    YES, я согласен
                </label>
            </div>
        </div>

        <button class="is-link button is-medium"  id="sub" type="submit"> Отправить форму </button>
    </form>

</section>
<style>

    .field:first-child{
        margin-top: 4em;
    }
    input[type='checkbox']{
        width: 30px;
    }
</style>
</body>
</html>