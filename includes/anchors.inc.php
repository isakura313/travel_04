<?php
for ($i = 0; $i < count($anchors_full['anchor']); $i++) {
    echo "<li> <a href= {$anchors_full['anchor'][$i]} class='nav__a'> {$anchors_full['content'][$i]} </a>  </li>";
}
