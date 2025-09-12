<?php

include "functions.php";

// №1⊗ppPmLpPrm
// Выведите с помощью цикла столбец чисел от 1 до 100.
task(1);
for ($i = 1; $i <= 100; $i++) {
    echo "$i, ";
}

// №2⊗ppPmLpPrm
// Выведите с помощью цикла столбец чисел от 100 до 1.
task(2);
for ($i = 100; $i >= 1; $i--) {
    echo "$i, ";
}

// №3⊗ppPmLpPrm
// Выведите с помощью цикла столбец четных чисел от 1 до 100.
task(3);
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo "$i\n";
    }
}

// №4⊗ppPmLpPrm
// Заполните массив 10-ю иксами с помощью цикла.
task(4);
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = 'x';
}

print_r($arr);

// №5⊗ppPmLpPrm
// Заполните массив числами от 1 до 10 с помощью цикла.
task(5);
$arr = [];

for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i;
}
print_r($arr);

// №6⊗ppPmLpPrm
// Дан массив с числами. С помощью цикла выведите только те элементы массива, которые больше нуля и меньше 10-ти.
task(6);
$arr = [1, 2, 3, 4, 5, 15, 19, 20, 21];
foreach ($arr as $elem) {
    if ($elem >= 0 and $elem < 10) {
        echo "$elem, ";
    }
}


// №7⊗ppPmLpPrm
// Дан массив с числами. С помощью цикла проверьте, что в нем есть элемент со значением 5.
task(7);
$hasFive = false;
foreach ($arr as $elem) {
    if ($elem === 5) {
        $hasFive = true;
        break;
    }
}
var_dump($hasFive);

// №8⊗ppPmLpPrm
// Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.
task(8);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem;
}
var_dump($sum);


// №9⊗ppPmLpPrm
// Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.
task(9);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem ** 2;
}
var_dump($sum);


// №10⊗ppPmLpPrm
// Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов, делить на количество).
task(10);
$sum = 0;
foreach ($arr as $elem) {
    $sum += $elem ** 2;
}
var_dump($sum / count($arr));

// №11⊗ppPmLpPrm
// Напишите скрипт, который будет находить факториал числа. Факториал - это произведение всех целых чисел, меньше данного, и его самого.
task(11);
function factorial($num)
{
    $resultFactorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $resultFactorial *= $i;
    }
    return $resultFactorial;
}

echo (factorial(5) . "\n");
echo (factorial(6) . "\n");

// №12⊗ppPmLpPrm
// Дан следующий массив с работниками и их зарплатами:
task(12);
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
// Увеличьте зарплату каждого работника на 10%.
$keyArray = [];

foreach ($arr as $key => $value) {
    $keyArray[] = $key;
}
var_dump($keyArray);

for ($i = 0; $i < count($keyArray); $i++) {
    $arr[$keyArray[$i]] *= 1.1;
}
print_r($arr);

// №13⊗ppPmLpPrm
// Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только тем работникам, у которых она меньше или равна 400.
task(13);
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];


for ($i = 0; $i < count($keyArray); $i++) {
    if ($arr[$keyArray[$i]] <= 400) $arr[$keyArray[$i]] *= 1.1;
}
print_r($arr);


// №14⊗ppPmLpPrm
// Дан следующий массив:
task(14);
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
// Найдите сумму ключей этого массива и поделите ее на сумму значений.
$keyArr = [];
$valueArr = [];

foreach ($arr as $key => $value) {
    $keyArr[] = $key;
    $valueArr[] = $value;
}

function sumOfArray($arr)
{
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    return $sum;
}

echo sumOfArray($keyArr) / sumOfArray($valueArr);

// №15⊗ppPmLpPrm
// Дан следующий массив:
task(15);
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
// Запишите ключи этого массива в один массив, а значения - в другой.
$arrKey = [];
$arrValue = [];

foreach ($arr as $key => $value) {
    $arrKey[] = $key;
    $arrValue[] = $value;
}

print_r($arrKey);
print_r($arrValue);

// №16⊗ppPmLpPrm
// Дан следующий массив:
task(16);
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
// Запишите в новый массив элементы, значение которых начинается с цифры 1 или цифры 2. 
// То есть у вас в результате получится вот такой массив:
// 	[
// 		125,
// 		225,
// 		128,
// 		145,
// 		281,
// 	];
$newArray = [];
foreach ($arr as $value) {
    if (((string)$value)[0] === '1' or ((string)$value)[0] === '2') {
        $newArray[] = $value;
    }
}
print_r($newArray);
