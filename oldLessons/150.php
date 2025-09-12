<?php

include "functions.php";
// Практика на использования изученных функций PHP
// В следующих задачах вы должны применить комбинацию стандартных функций PHP, чтобы решить задачу. Циклы использовать запрещено.

// №1⊗ppPmIBPrm
task(1);
// Дан массив с числами.
// Найдите среднее арифметическое его элементов.
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr) / count($arr);


// №2⊗ppPmIBPrm
task(2);
// Найдите сумму чисел от 1 до 100.
echo array_sum(range(1, 100));

// №3⊗ppPmIBPrm
task(3);
// Выведите столбец чисел от 1 до 100.
print_r(range(1, 100));

// №4⊗ppPmIBPrm
task(4);
// Заполните массив 10-ю иксами.
$arr = array_fill(0, 10, 'x');
print_r($arr);

// №5⊗ppPmIBPrm
task(5);
// Заполните массив 10-ю случайными числами от 1 до 10 так, 
//чтобы они не повторялись.
$arr = range(1, 10);
shuffle($arr);
print_r($arr);

// №6⊗ppPmIBPrm
task(6);
// Найдите факториал заданного числа.
$number = 5;
echo array_product(range(1, $number));

// №7⊗ppPmIBPrm
task(7);
// Дано число. Найдите сумму цифр этого числа.
$num = 123;
$num = (string)$num;
$arr = str_split($num);
print_r($arr);
echo (array_sum($arr));

// №8⊗ppPmIBPrm
task(8);
// Дана строка. Сделайте заглавным последний символ этой строки.
$str = "abcdef";
$lastSymbol = $str[strlen($str) - 1];
echo $lastSymbol;
$lastSymbol = strtoupper($lastSymbol);
$str = str_replace($lastSymbol, strtoupper($lastSymbol), $str);
echo $str;

// №9⊗ppPmIBPrm
task(9);
// Дан массив с числами. Получите из него массив с квадратными корнями этих чисел.
$arr = [1, 2, 3, 4, 5];
$newArr = array_map('sqrt', $arr);
print_r($newArr);

// №10⊗ppPmIBPrm
$arrValues = range(1, 26);
$arrKeys = range('a', 'z');
// Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита:
print_r(array_combine($arrKeys, $arrValues));
// 	['a' => 1, 'b' => 2...]

// №11⊗ppPmIBPrm
task(11);
// Дана строка '1234567890'. Найдите сумму цифр из этой строки.
$arr = str_split('1234567890');
echo array_sum($arr);


// №12⊗ppPmIBPrm
task(12);
// Дана некоторая строка с числами, например, такая:
$str = '1234567890';
// Найдите сумму пар чисел:
// 	12 + 34 + 56 + 78 + 90
$arr = str_split($str, 2);
echo array_sum($arr);


// №13⊗ppPmIBPrm
task(13);
// Используя комбинацию функций заполните массив следующим образом:
// 	[[1, 2, 3], [4, 5, 6], [7, 8, 9]] 
$arr = range(1, 9);
$result = array_chunk($arr, 3);
print_r($result);
