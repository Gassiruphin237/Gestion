<?php


function str_secur($string) {
    return trim(htmlspecialchars($string));
}

function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function img($img){

    $dir ="assets/images/".$img;
    echo $dir;
}
