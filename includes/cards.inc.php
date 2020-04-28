<?php
for ($i=0; $i < count($cards['header']); $i++) {
    echo
        "<div class='card'>
                    <div class='card__img_wrap'>
                        <img src='{$cards['img'][$i]}' alt='{$cards['alt'][$i]}' class='card__img'>
                    </div>
                    <h5 class='card__h5'>{$cards['header'][$i]}</h5>
                    <div class='card__line'></div>
                    <p class='card__p'> {$cards['parag'][$i]}</p>
                </div>";
}
