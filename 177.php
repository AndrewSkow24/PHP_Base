<?php

//№1⊗ppPmRcEP

//Дан массив:

$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5
];
// С помощью рекурсии выведите элементы этого массива на экран.

function printArrElement($arr)
{
    echo array_shift($arr);

    if (count($arr) !== 0) {
        printArrElement($arr);
    }
}

printArrElement([1, 2, 3, 4, 5]);
