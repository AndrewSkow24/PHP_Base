<?php

include "functions.php";

// №1⊗ppPmLpMst
// Код должен вывести числа от 0 до 10:

task(1);
for ($i = 0; $i <= 10; $i++) {
    echo $i . " ";
}

// №2⊗ppPmLpMst
// Код должен вывести числа от 10 до 0:
task(2);

for ($i = 10; $i >= 0; $i--) {
    echo $i . " ";
}


// №3⊗ppPmLpMst
// Код должен вывести числа от 10 до 0:
task(3);
for ($i = 10; $i >= 0; $i--) {
    echo $i . " ";
}

// №4⊗ppPmLpMst
// Код должен вывести числа от 0 до 10:
task(4);
$i = 0;

while ($i <= 10) {
    echo $i . " ";
    $i++;
}

// №5⊗ppPmLpMst
// Код должен найти сумму целых чисел от 1 до 10:
task(5);
$res = 0;

for ($i = 1; $i <= 10; $i++) {
    $res += $i;
}

echo $res;

// №6⊗ppPmLpMst
// Код должен найти произведение целых чисел от 1 до 10:
task(6);
$res = 1;
for ($i = 1; $i <= 10; $i++) {
    $res *= $i;
}
echo $res;

// №7⊗ppPmLpMst
// Код должен возвести в квадрат каждый элемент массива:
task(7);
$arr = [1, 2, 3, 4, 5];

// foreach ($arr as $elem) {
//     $elem = $elem ** 2;
// }

for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] **= 2;
}

var_dump($arr);

// №8⊗ppPmLpMst
// Код должен заполнить массив числами от 1 до 5:
task(8);

$arr = [];

for ($i = 1; $i <= 5; $i++) {
    $arr[] = $i;
}

var_dump($arr);

// №9⊗ppPmLpMst
// Код должен проверить, есть ли в массиве число 3 или нет:
task(9);

$arr = [1, 2, 3, 4, 5];
$res = '';

foreach ($arr as $elem) {
    if ($elem === 3) {
        $res = '+++';
        break;
    } else {
        $res = '---';
    }
}

echo $res;

// №10⊗ppPmLpMst
// Код должен вывсти числа от 10 до 1:
task(10);

$i = 10;

while ($i >= 1) {
    echo $i . " ";
    $i--;
}

// №11⊗ppPmLpMst
// Код должен проверить, есть ли в массиве число 3 или нет:

task(11);
$arr = [1, 2, 3, 4, 5];
$res = false;

foreach ($arr as $elem) {
    if ($elem === 3) {
        $res = true;
        break;
    }
}
var_dump($res);
// без ошибок 

// №12⊗ppPmLpMst
// Код должен вывсти числа от 10 до 1:
task(12);

$i = 10;

while ($i >= 1) {
    echo $i . " ";
    $i--;
}

// №13⊗ppPmLpMst
// Код должен вывести только четные элементы из массива:
task(13);

$arr = [1, 2, 3, 4, 5];

foreach ($arr as $elem) {
    if ($elem % 2 == 0) {
        echo $elem . ", ";
    }
}


// №14⊗ppPmLpMst
// Код должен вывсти числа от 10 до 1:

task(14);
$i = 10;

while ($i >= 1) {
    echo $i . ", ";
    $i--;
}

// №15⊗ppPmLpMst
// Код должен вывсти числа от 10 до 1:
task(15);

$i = 10;

while ($i >= 1) {
    echo $i . ", ";
    $i--;
}
