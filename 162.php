<?php

include "functions.php";

// №1⊗ppPmUFFl
task(1);
// Сделайте функцию, которая параметром будет принимать массив с числами, 
// и проверять, что все элементы в этом массиве являются четными числами.

function isElementsPositive($arr)
{

    foreach ($arr as $elem) {
        if ($elem <= 0) {
            return false;
        }
    }

    return true;
}

echo isElementsPositive([1, 3, 4, 5]);
echo isElementsPositive([2, 1, -3, 0, 1]);

// №2⊗ppPmUFFl
task(2);
// Сделайте функцию, которая параметром будет принимать число и проверять, что все цифры это числа являются нечетными.
function isElementsEven($arr)
{

    foreach ($arr as $elem) {
        if ($elem % 2 != 0) {
            return false;
        }
    }

    return true;
}

var_dump(value: isElementsEven([2, 4, 6, 8]));
var_dump(value: isElementsEven([1, 4, 3, 8]));


// №3⊗ppPmUFFl
task(3);
// Сделайте функцию, которая параметром будет принимать массив и проверять,
// есть ли в этом массиве два одинаковых элемента подряд.
function hasDoubleElements($arr)
{

    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] == $arr[$i + 1]) return true;
    }

    return false;
}

var_dump(hasDoubleElements([1, 2, 3, 45, 6]));
var_dump(hasDoubleElements([1, 2, 3, 4, 4]));
var_dump(hasDoubleElements([1, 2, 3, 3]));
