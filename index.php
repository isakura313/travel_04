<?php
require $_SERVER['DOCUMENT_ROOT'].'/config/info.config.php';

$title = "Незабываемый сайт";
$comma = implode(", ", $keywords);
$keywords = $comma;
require "includes/header.inc.php";
?>

<body>
    <div class="wrapper">
        <header class="header">
            <div id="logo">
                <img src="img/logo.png" alt="лого, компания, Nordic">
            </div>
            <nav class="nav">
            <?php
                require $_SERVER['DOCUMENT_ROOT'] . '/includes/anchors.inc.php';
            ?>
            </nav>
            <input type="text" id="temp_input">
            <button class="temp_button"> Клик</button>
        </header>

        <div class="wrap_form animated">

            <i class="fa fa-times"></i>
            <form action="includes/form.inc.php" method="POST">
                <h3> Введите ваши данные</h3>
                <p class="error"> </p>
                <p class="error_name"></p>
                <p class="error_email"></p>
                <p class="error_tel"></p>

                <input type="text" name="name" placeholder="имя" >
                <input type="email" name="email" placeholder="email">
                <input type="tel" name="tel" placeholder="телефон">
                <input type="submit" value="отправить">
            </form>
        </div>

        <div class="side_panel">
<ul>

<!-- здесь у нас пойдут ссылки -->
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/anchors.inc.php'; ?>
    </ul>
        </div>
        <div class="promo" id="main">
            <h1 class="promo__h1">Только красивые путешествия</h1>
            <a href="#">
                <button class="promo__button"> Присоединяйся </button>
            </a>

            <div class="soc_icons">
                <a href="https://vk.com">
                    <div class="soc_icons__icon soc_icons__icon_vk "></div>
                </a>
                <a href="https://facebook.com">
                    <div class="soc_icons__icon soc_icons__icon_face"></div>
                </a>
                <a href="https://instagram.com">
                    <div class="soc_icons__icon soc_icons__icon_inst"></div>
                </a>
            </div>
        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Путешествуй красиво</h3>
        </div>

        <div class="info">
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/parag.inc.php';
?>


        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Причины воспользоваться нашими услугами</h3>

            <div class="calculator">
                <input type="text" id="calc" style="font-size: 20px">
                <button id='btn_result'> Посчитать </button>
        </div>
        </div>
        <div class="reasons" id="about">
            <ul class="reasons__ul">
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/includes/reasons.inc.php';
    ?>
            </ul>
        </div>
        <div class="cards">
    <?php

require $_SERVER['DOCUMENT_ROOT'] . '/includes/cards.inc.php';

?>
        </div>
<div class="wrap_panel">
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/faq.inc.php';

?>
</div>

        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A53668337e5785bee8127b031a1f8f4ba1a74ac0c23ed566812a0e5924e07e887&amp;source=constructor" width="1200" height="400" frameborder="0"></iframe>

        <div class="feedback-space" style="height: 100px; display:flex; justify-content: center;">
            <a href="admin/otzivi.php">
            <button class="promo__button"> Посмотреть отзывы </button>
            </a>
        </div>

        <footer class="footer" id="contact">
            <div class="contacts">
                <h5 class="contacts__h5">Наши контакты:</h5>
                <address class="contacts__address"> Москва, ул Комсомола 12</address>
                <span class="contacts__span">тел 8(495)-626-46-34</span>
                <span class="contacts__span"> <a href="mailto:example@mail.ru"> example@mail.ru</a></span>
                <span class="contacts__span"> Часы работы: 10-19 </span>
            </div>
            <div class="logo">

            </div>
            <div class="travel_anc">
                <a href="#" class="travel_anc__a">
                    Путешествия по России
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по Украине
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по Таиланду
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по ОАЭ
                </a>
                <a href="#" class="travel_anc__a">
                    Путешествия по Латвии
                </a>
            </div>


        </footer>
    </div>

</body>

</html>