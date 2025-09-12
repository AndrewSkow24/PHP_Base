<?php

/* 
Дан массив с числами. Найдите сумму этих чисел и результат
запишите в файл sum.txt.
*/

$arr = [1, 2, 3, 4, 5];

file_put_contents("sum.txt", array_sum($arr));
