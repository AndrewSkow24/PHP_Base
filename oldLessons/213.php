<?php

include "functions.php";

$str = 'aa bb cd ef';
$str = 'aa bb abc aaa bbb ccc xyz';

$res = preg_replace('#([a-z])\1#', '!', $str);
echo $res;


// Практические задачи
// №1⊗ppPmRgEP
task(1);
// Дана строка:
$str = 'aaa bbb ccc xyz';
// Найдите все подстроки, в которых есть три одинаковые буквы
// подряд.
$res = preg_replace('#([a-z])\1\1#', '___', $str);
echo $res;

// №2⊗ppPmRgEP
task(2);
// Дана строка:
$str = 'a aa aaa abab bbbb';
// Найдите все подстроки, в которых есть две и более одинаковые буквы подряд.
$res = preg_replace('#([a-z])\1+#', '___', $str);
echo $res;

// №3⊗ppPmRgEP
task(3);
// Дана строка:
$str = 'aaa aaa bbb bbb ccc ddd';
// Найдите все подстроки, в которых есть два одинаковых слова подряд.
$res = preg_replace('#(\b.*\b)\1#', '', $str);
echo $res;
