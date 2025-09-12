<?php

include "functions.php";

// (?<name>pattern), где name - имя кармана, pattern - регулярка

$str = '2025-10-29';
$reg = '#(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})#';
preg_match($reg, $str, $match);
print_r($match);

// №1⊗ppPmRgNP
task(1);
// Дана строка со временем:
$str = '12:59:59';
// Положите часы, минуты и секунды в отдельные именованные карманы.
preg_match('#(?<hours>\d{2}):(?<minutes>\d{2}):(?<seconds>\d{2})#', $str, $match);
print_r($match);
// №2⊗ppPmRgNP
task(2);
// Напишите функцию, которая в массиве с результатом
// удалит все нумерованные карманы, оставив только именованные.
function deleteNumberElements($arr)
{
    foreach ($arr as $key => $value) {
        // echo $key . "\n";
        if (preg_match('~\d+~', $key) == 1) {
            echo $key;
            unset($arr[$key]);
        }
    }
    return $arr;
}

print_r(deleteNumberElements($match));
