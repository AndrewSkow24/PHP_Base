<?php

include "functions.php";

// №1⊗ppPmLpNA
// Найдите сумму четных чисел от 2 до 100.
task(1);
$sum = 0;
for ($i = 2; $i <= 100; $i++) {
    if ($i % 2 === 0) $sum += $i;
}
echo $sum;


// №2⊗ppPmLpNA
// Найдите сумму нечетных чисел от 1 до 99.
task(2);
$sum = 0;
for ($i = 1; $i <= 99; $i++) {
    if ($i % 2 !== 0) $sum += $i;
}
echo $sum;


// №3⊗ppPmLpNA
// Найдите произведение целых чисел от 1 до 20.
task(3);
$result = 1;
for ($i = 1; $i <= 20; $i++) {
    $result *= $i;
}
echo $result;
