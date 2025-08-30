<?php

include 'functions.php';

// №1⊗ppPmCdPrm
// В переменной $month лежит какое-то число из интервала от 1
// до 12. Определите в какую пору года попадает этот месяц
// (зима, лето, весна, осень).

task(1);

$month = 3;

switch ($month) {
    case 12:
    case 1:
    case 2:
        echo "Зима";
        break;
    case 3:
    case 4:
    case 5:
        echo "Весна";
        break;
    case 6:
    case 7:
    case 8:
        echo "Лето";
        break;
    case 9:
    case 10:
    case 11:
        echo "Осень";
        break;
    default:
        echo "Некорректный месяц";
        break;
}

// №2⊗ppPmCdPrm
// Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.

task(2);
$str = 'abcde';
if ($str[0] === 'a') echo "Первый символ строки - a";

// №3⊗ppPmCdPrm
// Дано число, например, 12345. Проверьте, что первым символом этого числа является цифра 1, 2 или 3.
task(3);

$num = 12345;
$num = (string)$num;

if ($num[0] === '1' or $num[0] === '3' or $num[0] == '3') echo "Число начинается с 1, 2 или 3";


// №4⊗ppPmCdPrm
// Дано трехзначное число. Найдите сумму цифр этого числа.
task(4);
$num = 123;
$num = (string)$num;
echo (int)$num[0] + (int)$num[1] + (int)$num[2];


// №5⊗ppPmCdPrm
// Дано число из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.

$num = 123321;
$num = (string)$num;
var_dump(($num[0] + $num[1] + $num[2]) == ($num[3] + $num[4] + $num[5]));
