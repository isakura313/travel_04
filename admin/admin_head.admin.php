<?php

 echo("<!DOCTYPE html> <html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> {$title_info}</title>");
    echo("<link rel='stylesheet' href='http://");
    echo  $_SERVER['HTTP_HOST'] ;
    echo ("/css/bulma.min.css'>");
    echo "<script  src='http://";
    echo  $_SERVER['HTTP_HOST'] ;
    echo ("/js/admin.js' defer></script> </head><body> ");
