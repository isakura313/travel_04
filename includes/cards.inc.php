<?php
foreach ($cards as $key => $value) {
    echo
        "<div class='card'>
                    <div class='card__img_wrap'>
                        <img src='{$cards[$key][0]}' alt='img' class='card__img'>
                    </div>
                    <h5 class='card__h5'>{$cards[$key][1]}</h5>
                    <div class='card__line'></div>
                    <p class='card__p'> {$cards[$key][2]}</p>
                </div>";
    next($cards);
}
