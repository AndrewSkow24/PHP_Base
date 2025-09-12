<?php

include "functions.php";

// №1⊗ppPmUFPrm
task(1);
// Сделайте функцию, которая параметром будет принимать число и возвращать массив его делителей.
function getDivsOfNumbers($num)
{
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) array_push($arr, $i);
    }
    return $arr;
}

print_r(getDivsOfNumbers(139));
print_r(getDivsOfNumbers(num: 124));
print_r(getDivsOfNumbers(num: 127));


// №2⊗ppPmUFPrm
task(2);
// Сделайте функцию, которая параметром будет принимать два числа и возвращать массив их общих делителей.
function getCommonFactors($num1, $num2)
{
    $factors1 = getDivsOfNumbers($num1);
    $factors2 = getDivsOfNumbers($num2);

    return array_intersect($factors1, $factors2);
}

print_r(getCommonFactors(1024, 512));


// №3⊗ppPmUFPrm
task(3);
// Сделайте функцию, которая параметром будет принимать число и возвращать сумму его цифр.
function sumOfDigit($num)
{
    return array_sum(str_split((string)$num));
}
echo sumOfDigit(123);

// №4⊗ppPmUFPrm
task(4);
// Сделайте функцию, которая вернет текущий день недели словом.
function getCurrentDay()
{
    $days = [
        "воскресенье",
        "понедельник",
        "вторник",
        "среда",
        "четверг",
        "пятница",
        "суббота"
    ];
    return $days[date("w")];
}

echo getCurrentDay();
// №5⊗ppPmUFPrm
task(5);
// Сделайте функцию, которая параметром будет получать дату, а возвращать день недели словом, соответствующий этой дате.
function getDayOfWeek($date_string)
{
    $days = [
        "воскресенье",
        "понедельник",
        "вторник",
        "среда",
        "четверг",
        "пятница",
        "суббота"
    ];
    $date = date_create($date_string);
    return $days[date_format($date, "w")];
}
echo getDayOfWeek("1.09.2025");

// №6⊗ppPmUFPrm
task(6);
// Сделайте функцию, которая параметром будет принимать секунды, а возвращать количество суток, соответствующих этим секундам.
function secondsToDays($seconds)
{
    return floor($seconds / 3660 / 24);
}

echo secondsToDays(1234214);
// №7⊗ppPmUFPrm
task(7);
// Сделайте функцию, которая параметром будет год и проверять, високосный он или нет.
function isLeapYear($year)
{
    $date = date_create("1.1.$year");
    if (date_format($date, "L")) return true;
    return false;
}
var_dump(value: isLeapYear(2024));
var_dump(value: isLeapYear(2000));
var_dump(value: isLeapYear(1000));


// №8⊗ppPmUFPrm
task(8);
// Сделайте функцию, которая параметром будет принимать число и проверять, простое оно или нет.
function isNumSimple($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0 and $num != 2) return false;
    }
    return true;
}

var_dump(isNumSimple(137));
var_dump(isNumSimple(1024));
var_dump(isNumSimple(2));
