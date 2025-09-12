<?php

include "functions.php";

// №1⊗ppPmLpAEA
// Дан массив:

task(1);
$arr = [2, 5, 9, 3, 1, 4];
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem;
}
echo $sum;


// Найдите сумму элементов этого массива.

// №2⊗ppPmLpAEA
// Дан массив:
task(2);
$arr = [2, 5, 9, 3, 1, 4];
// Найдите сумму элементов элементов, являющихся четными числами.
$sum = 0;
foreach ($arr as $elem) {
    if ($elem % 2 === 0) $sum += $elem;
}
echo $sum;

// №3⊗ppPmLpAEA
// Дан массив:
task(3);
$arr = [2, 5, 9, 3, 1, 4];
// Найдите сумму квадратов элементов этого массива.
$sum = 0;
foreach ($arr as $el) {
    $sum += $el ** 2;
}
echo $sum;

// №4⊗ppPmLpAEA
// Дан массив:
task(4);
$arr = [2, 5, 9, 3, 1, 4];
// Найдите произведение элементов этого массива.
$product = 1;
foreach ($arr as $el) {
    $product *= $el;
}
echo $product;
