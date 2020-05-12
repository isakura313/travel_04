<?php
$title_info = "Админка пользователи";
require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
?>

<section class="columns has-background-info is-centered">
    <div class="column is-four-fifths has-text-centered">
        <h3 class="title has-text-white"> Редактирование пользователей</h3>
    <div class="column">
        <div class='table'>
            <table class='table is-bordered is-striped'>
                <thead>
                <tr>
                    <th> ID</th>
                    <th> login </th>
                    <th> email </th>
                    <th> role </th>
                    <th>      </th>
                    <th>      </th>
                    <th>      </th>
                </tr>
                </thead>
                <?php
                for ($i = 0; $i < count($users['id']); $i++) {
                    echo "<tr>
    <th>{$users['id'][$i]} </th>
     <th>{$users['email'][$i]} </th>
     <th>{$users['login'][$i]} </th>
     <th>{$users['role'][$i]} </th>
     <th>  <button class='button is-danger banned' id={$users['id'][$i]} > Забанить</button> </th>
     <th>  <button class='button is-primary admin_make' id={$users['id'][$i]}> Сделать админом</button> </th>     
     <th>  <button class='button  is-link delete_it' id={$users['id'][$i]}> Удалить</button> </th>

     
    </tr>";    }
                ?>
            </table>
        </div>
    </div>
</div>
</body>

</html>
