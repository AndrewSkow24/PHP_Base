<?php

include 'functions.php';

// №1⊗ppPmLpWl
// Выведите на экран числа от 1 до 100.
task(1);
$num = 1;
while ($num <= 100) {
    echo "$num\n";
    $num++;
}

// №2⊗ppPmLpWl
// Выведите на экран числа 11 до 33.
task(2);
$num = 11;
while ($num <= 33) {
    echo "$num\n";
    $num++;
}

// №3⊗ppPmLpWl
// Выведите на экран числа от 100 до 1.
task(3);
$num = 100;
while ($num >= 1) {
    echo "$num\n";
    $num--;
}

// №4⊗ppPmLpWl
// Дано число num с неким начальным значением. 
// Умножайте его на 3 столько раз, пока результат умножения не станет больше 1000. Какое число получится? Посчитайте количество итераций, необходимых для этого.
task(4);
$count = 0;
$num = 3;
while ($num < 1000) {
    $num *= 3;
    echo "$num\n";
    $count++;
}

echo $count;
