<?php
session_start();
$title_info = "Главная страница админки";
require $_SERVER['DOCUMENT_ROOT'] . '/admin/admin_head.admin.php';
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
?>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo("
                          <a class='button is-primary' href='reg/admin_logout.php'>
                        <strong>Выйти</strong>
                    </a>");
                    } else {
                        echo "<a class='button is-primary' href='reg/admin_reg.php'>
                        <strong>Регистрация</strong>
                    </a>
                    <a class='button is-light' href='reg/admin_auth.php'>
                        Авторизация
                    </a>";
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="columns  is-multiline is-8 container has-background-success"  >

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/feedback.inc.php';

?>
</div>
</body>
</html>