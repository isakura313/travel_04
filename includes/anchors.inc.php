<?php
for ($i = 0; $i < count($anchors['anchor']); $i++) {
    echo "<li> <a href= {$anchors['anchor'][$i]} class='nav__a'> {$anchors['content'][$i]} </a>  </li>";
}
