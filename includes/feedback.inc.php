<?php

for ($i=0; $i < count($feedback['topic']); $i++) {

    echo "
    <div class='column is-one-quarter is-narrow'>
    <div class='card'>
    <header class='card-header'>
        <p class='card-header-title'>{$feedback['topic'][$i]}</p>
     </header>
     <div class='card-content'>
        <div class='content'>
         {$feedback['content'][$i]}
          <br>
            <time datetime={$feedback['created_at'][$i]}>{$feedback['created_at'][$i]}</time>
        </div>
    </div>
    <footer class='card-footer'>
    <a href='#' class='card-footer-item'>Рассказать об этом друзьям в ВК</a>
</footer
 <div>
 </div>
 </div>
 ";
}
?>
