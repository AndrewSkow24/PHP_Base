<?php

include "functions.php";

// №1⊗ppPmScPR
task(1);
// Исправьте следующий код так, чтобы массив изменялся внутри функции:


$num = 1;

function func(&$num)
{
    $num++;
}

func($num);
echo $num; // должно вывести 2

// №2⊗ppPmScPR
task(2);
// Исправьте следующий код так, чтобы массив изменялся внутри функции:


$arr = [1, 2, 3, 4, 5];

function func2(&$arr)
{
    $arr[0] = '!';
}

func2($arr);
var_dump($arr);
