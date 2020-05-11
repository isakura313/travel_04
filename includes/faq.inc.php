<?php
foreach ($faq as $key => $value) {
    echo "<div class='faq_panel'> <h5>{$faq[$key][0]} </h5></div>
        <div class='faq_answer'> <p> {$faq[$key][1]}</p></div>";
    next($faq);
}
