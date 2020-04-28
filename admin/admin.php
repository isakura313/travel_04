<?php
require $_SERVER['DOCUMENT_ROOT'].'/travel/admin/admin_head.admin.php';
echo ("<section class='has-background-link columns'>
    <div class='column is-full has-text-white' >
        <h1 class='label is-size-2 has-text-centered '> Hello user</h3>
        <h3 class='is-size-3 has-text-centered'> Добро пожаловать в CMS систему</h3>
    </div>
</section>
");
?>
<div class="columns">
    <div class="column has-text-centered is-full"> 
        <a href="parag.admin.php">
        <button class="button is-size-4 is-danger"> Редактировать параграфы</button>
        </a>

        <a href="/admin/cards">
        <button class="button is-size-4 is-danger"> Редактировать карточки</button>
        </a>

        <a href="anchor.admin.php">
        <button class="button is-size-4 is-danger"> Редактировать ссылки</button>
        </a>

    </div>
</div>


</body>
</html>