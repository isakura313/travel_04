<?php
$title_info = "Админка карточки";
require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
?>

<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Редактирование карточек</h3>
        <hr class="login-hr">
        <p class="is-size-5 has-text-white"> Введите контент, на каждую карточку по отдельности</p>
        <figure class="image is-128x128">
            <img src="../img/kangaroo.png" alt="">
        </figure>
        <form action="form_cards.php" method="POST" class="has-background-light" enctype="multipart/form-data">
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
                    <label for="id" class="label"> Введите id карточки</label>
                    <input type="text" class="input is-medium" placeholder="id" name="id">

                    <label for="ordera" class="label"> Введите номер карточки в порядке желательно с gap</label>
                    <input type="text" class="input is-medium" placeholder="порядковый номер" name="ordera">

                    <label for="header" class="label"> Введите заголовок карточки</label>
                    <input type="text" class="input is-medium" placeholder="Заголовок" name="header">

                    <label for="parag" class="label"> Введите контент карточки</label>
                    <input type="text" class="input is-medium" placeholder="параграф" name="parag">

                    <label for="alt" class="label"> Введите тэги карточек через запятую</label>
                    <input type="text" class="input is-medium" placeholder="тэги" name="alt">


                    <div class="field">
                        <label class="label"> Загрузите картинку
                            <div class="file is-centered">
                                <input type="file" class="file-input" name="picture">
                                <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Выберите файл
                            </span>
                        </span>

                            </div>

                        </label>
                    </div>
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
                    <th> Img</th>
                    <th> header</th>
                    <th> parag</th>
                    <th> alt</th>
                    <th> ordera</th>
                </tr>
                </thead>


                <?php
                for ($i=0; $i < count($cards['header']); $i++) {
                    echo "<tr>
                   <td> {$cards['id'][$i]} </td>
                   <td> {$cards['img'][$i]} </td>
                   <td> {$cards['header'][$i]} </td>
                   <td> {$cards['parag'][$i]} </td>
                   <td> {$cards['alt'][$i]} </td>
                   <td> {$cards['ordera'][$i]} </td>
                    </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>

</html>
