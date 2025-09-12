<?php

// Дан следующий массив:


$arr = [
    [1, 2, 3],
    [4, 5, 6, 7],
    [8, 9]
];

$sum = 0;
foreach ($arr as $subArr) {
    foreach ($subArr as $element) {
        $sum += $element;
    }
}

var_dump($sum);
