<?php

//DRY -DONT REPEAT YOURSELF  vs  WET WRITE EVERYTHING TWICE
function dump($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function dd($variable) {
    echo '<pre>';
    //die(var_dump($variable));
    die(dump($variable));
    echo '</pre>';
}