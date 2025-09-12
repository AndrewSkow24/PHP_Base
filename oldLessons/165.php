<?php

include "functions.php";

// №1⊗ppPmUFMst
task(1);
// Код должен найти сумму результатов работы двух функций:


function func1()
{
    return 3;
}
function func2()
{
    return 5;
}

echo func1() + func2();

// №2⊗ppPmUFMst
task(2);
// Код должен найти сумму элементов массива:

function sum($arr)
{
    $res = 0;

    foreach ($arr as $elem) {
        $res += $elem;
    }
    return $res;
}

echo sum([1, 2, 3, 4, 5]);

// №3⊗ppPmUFMst
task(3);
// Код должен найти сумму элементов массива, однако, ничего не выводит:

$arr = [1, 2, 3, 4, 5];

function func($arr)
{
    $res = 0;

    foreach ($arr as $elem) {
        $res += $elem;
    }

    echo $res;
}

func($arr);

// №4⊗ppPmUFMst
task(4);
// Код должен найти сумму результатов работы двух функций:


function func11()
{
    return 3;
}
function func21()
{
    return 5;
}

echo func11() + func21();

// №5⊗ppPmUFMst
task(5);
// Код должен найти сумму элементов массива:


function sum2($arr)
{
    $sum = 0;

    foreach ($arr as $elem) {
        $sum += $elem;
    }
    return $sum;
}

$res = sum2([1, 2, 3, 4, 5]);
echo $res;

// №6⊗ppPmUFMst
task(6);
// Функция добавляет ноль к числу от 1 до 9, а числа больше 9 возвращает без изменений:


function add($num)
{
    if ($num <= 9) {
        return '0' + $num;
    }

    return $num;
}

// №7⊗ppPmUFMst
task(7);
// Код должен проверить число на то, что оно является простым:

var_dump(isPrime(13)); // должен вывести true 
var_dump(isPrime(12)); // должен вывести false 

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i !== 0) {
            return true;
        } else {
            return false;
        }
    }
}
