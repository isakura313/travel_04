<?php

for ($i=0; $i < count($reasons['smiles']); $i++) { 
    echo " <li class='reasons__li'> {$reasons['smiles'][$i]}  {$reasons['content'][$i]}</li>";
}
?>