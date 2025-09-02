<?php

// рекурсия

$i = 1;

function func()
{
    global $i;

    echo $i;
    $i++;

    if ($i <= 10) {
        func();
    }
}

func();
