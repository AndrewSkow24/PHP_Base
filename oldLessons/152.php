<?php

include "functions.php";

// №1⊗ppPmUFPr
task(1);
// Сделайте функцию, которая параметром принимает число и 
// выводит на экран куб этого числа.
function getCube($num)
{
    echo ($num ** 3) . "\n";
}

getCube(3);
getCube(4);

// №2⊗ppPmUFPr
task(2);
// Сделайте функцию, которая параметром принимает
// число и проверяет, положительное это число или отрицательное. 
// В первом случае пусть функция выводит на экран текст '+++', 
// а во втором '---'.

function isNumPositive($num)
{
    if ($num >= 0) {
        echo "+++";
    } else {
        echo "---";
    }
}

isNumPositive(45);
isNumPositive(-12);
