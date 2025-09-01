<?php

include "functions.php";

// №1⊗ppPmUFInr
task(1);
// Сделайте функцию, выводящую на экран ваше имя.
function printMyName()
{
    echo "Andrew\n";
}
printMyName();

// №2⊗ppPmUFInr
task(2);
// Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.
function printOneToHundred()
{
    $arr = range(1, 100);
    echo array_sum($arr) . "\n";
}

printOneToHundred();
