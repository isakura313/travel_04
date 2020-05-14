<?php
$title_info = "Редактирование отзывов";
require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
?>

<section class="columns has-background-info is-centered">
    <div class="column is-four-fifths has-text-centered">
        <h3 class="title has-text-white"> Редактирование отзывов</h3>
        <div class="column">
            <div class='table'>
                <table class='table is-bordered is-striped'>
                    <thead>
                    <tr>
                        <th> ID</th>
                        <th> topic </th>
                        <th> content </th>
                        <th> author </th>
                        <th> created_at </th>
                        <th> review </th>
                    </tr>
                    </thead>
                    <?php
                    for ($i = 0; $i < count($feedback_more['id']); $i++) {
                        echo "<tr>
        <th>{$feedback_more['id'][$i]} </th>
     <th>{$feedback_more['topic'][$i]} </th>
     <th>{$feedback_more['content'][$i]} </th>
     <th>{$feedback_more['author'][$i]} </th>
     <th>{$feedback_more['created_at'][$i]} </th>
     <th class='review'>{$feedback_more['review'][$i]} </th>    
     <th>  <button class='button  is-danger delete_it' id={$feedback_more['id'][$i]}> Удалить</button> </th>
     <th>  <button class='button  is-black activе_it ' id={$feedback_more['id'][$i]}>Пропустить</button> </th>
    </tr>";    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>

    </html>
