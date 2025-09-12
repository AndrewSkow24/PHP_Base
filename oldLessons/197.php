<?php

include "functions.php";

// №1⊗ppPmRgSHy
task(1);
// Дана строка:
$str = 'xaz xBz xcz x-z x@z';
// Найдите все строки по следующему шаблону: 
// буква 'x', большая или маленькая буква или дефис, буква 'z'.
echo preg_replace("#x[A-Za-z\-]z#", "___", $str);

// №2⊗ppPmRgSHy
task(2);
// Дана строка:
$str = 'xaz x$z x-z xcz x+z x%z x*z';
// Найдите все строки по следующему шаблону: 
// буква 'x', затем или доллар, или дефис или плюс, потом буква 'z'.
echo preg_replace("#x[$\-+]z#", "___", $str);
