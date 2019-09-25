<?php


function dump($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function dd($variable) {
    //DRY -DONT REPEAT YOURSELF  vs  WET WRITE EVERYTHING TWICE
    //die(var_dump($variable));
    die(dump($variable));
}