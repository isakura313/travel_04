<?php
require $_SERVER['DOCUMENT_ROOT'].'/travel/config/info.config.php';

for ($i=0; $i < count($reasons); $i++) { 
    echo " <li class='reasons__li'> {$reasons[$i][0]}  {$reasons[$i][1]}</li>";
}
?>