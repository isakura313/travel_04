<?php


class Validate
{
static  function checksize($file){
    if ($file >= 20000000){
        return  "<h5 class='has-text-danger'> Слишком большой файл!</h5>";
    }

}

}