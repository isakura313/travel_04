<?php

require $_SERVER['DOCUMENT_ROOT'].'/travel/config/info.config.php';

foreach ($anchors as $key => $value){
    echo "<li> <a href= {$anchors[$key][0]} class='nav__a'> {$anchors[$key][1]} </a>  </li>";
    next($anchors);
}
