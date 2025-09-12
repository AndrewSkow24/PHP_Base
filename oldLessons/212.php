<?php

include "functions.php";

$str = '1 23 456 xax';
$res = preg_replace("#(\d+)#", '{$1}', $str);
print_r($res);

// Практические задачи
// №1⊗ppPmRgRP
task(1);
// Дана строка:
$str = '12 34 56 78';
// Поменяйте местами цифры во всех двухзначных числах.
$res = preg_replace("#(\d)(\d)#", '$2$1', $str);
echo $res;

// №2⊗ppPmRgRP
task(2);
// Дана строка с датой:
$str = '31.12.2025';
// Преобразуйте эту дату в '2025.12.31'.
$res = preg_replace("#(\d{4}).(\d{2}).(\d{2})#", "$3$2$1", $str);
echo $res;
