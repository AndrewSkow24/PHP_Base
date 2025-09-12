<?php

// Дан массив:


$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

// С помощью рекурсии найдите сумму элементов этого массива.


function getSumElementsArray($arr)
{
    $sum = array_shift($arr);

    if (count($arr) !== 0) {
        $sum += getSumElementsArray($arr);
    }

    return $sum;
}

echo getSumElementsArray($arr);
