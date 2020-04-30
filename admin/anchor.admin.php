<?php
$title_info = "Админка ссылки";

require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
?>

<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Редактирование ссылочек</h3>
        <hr class="login-hr">
        <p class="is-size-5 has-text-white"> Введите контент, каждую ссылку по отдельности
        <figure class="image is-128x128">
            <img src="../img/big-ben.png" alt="">
        </figure>
        <form action="form_a.php" method="GET" class="has-background-primary">
            <div class="field">
                <label class="radio label">
                    <input type="radio" name="choose" value="ins" required>
                    Занести данные
                </label>
                <label class="radio label">
                    <input type="radio" name="choose" value="del" required>
                    Удалить данные
                </label>
                <label class="radio label">
                    <input type="radio" name="choose" value="update" required>
                    Редактировать данные
                </label>
            </div>

            <div class="field">
                <div class="box">
                    <label for="id" class="label"> Введите id ссылки</label>
                    <input type="text" class="input is-medium" placeholder="id" name="id">

                    <label for="anchor" class="label"> Введите адрес ссылки</label>
                    <input type="text" class="input is-medium" placeholder="ссылка" name="anchor">


                    <label for="content" class="label"> Введите  контент ссылки</label>
                    <textarea name="content" cols="40" rows="5" class="is-size-4" style="padding: 10px;"></textarea>

                    <label for="ordera" class="label"> Введите номер в порядке </label>
                    <input type="text" class="input is-medium" placeholder="order" name="ordera">
                </div>
            </div>

            <button class="button is-success  is-large is-pulled-right" type="submit">Отправить данные</button>


        </form>
    </div>

</section>
<div class="columns is-centered">
    <div class="column is-half">
        <div class='table-container'>
            <table class='table is-bordered is-striped'>
                <thead>
                <tr>
                    <th> ID</th>
                    <th> Anchor</th>
                    <th> Content</th>
                    <th> Order</th>
                </tr>
                </thead>


                <?php

                for ($i = 0; $i < count($anchors_full['anchor']); $i++) {
                    echo " <tr> <th>  {$anchors_full['id'][$i]} </th>
                    <th>   {$anchors_full ['anchor'][$i]}   </th>
                    <th>   {$anchors_full ['content'][$i]}   </th>
                    <th>   {$anchors_full ['ordera'][$i]}   </th>
                        </tr>";
                }

                ?>
            </table>
        </div>
    </div>
</div>
</body>

</html>
