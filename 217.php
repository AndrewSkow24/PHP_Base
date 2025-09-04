<?php

include "functions.php";

// №1⊗ppPmRgPNV
task(1);
// Дана строка, содержащая имена функций:
$str = 'func1() func2() func3()';
// Получите массив имен функций из строки.
preg_match_all('#(?<func_name>[a-z0-9]+(?=\(\)))#', $str, $matches);
print_r($matches);

// №2⊗ppPmRgPNV

// Дана строка с тегом:
$str = '<a href="" class="eee" 
		id="zzz">';
// Получите массив имен атрибутов этого тега.
preg_match_all('#([a-z]+?)="[a-z]*?"#', $str, $matches);
print_r($matches);
// №3⊗ppPmRgPNV
task(3);
// Дана строка с переменными:
$str = '$aaa $bbb $ccc';
echo preg_match_all('~\$([a-z0-9]+)~', $str, $matches);
// Получите массив имен переменных из этой строки (без доллара).
print_r($matches);
