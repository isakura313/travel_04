<?php


require $_SERVER['DOCUMENT_ROOT'].'/travel/config/info.config.php';
for ($i=0; $i < count($anchors['anchor']) ; $i++) {
    echo "<li> <a href= {$anchors['anchor'][$i]} class='nav__a'> {$anchors['content'][$i]} </a>  </li>";
}
