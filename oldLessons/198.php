<?php

// ^ - начало строки, $ - конец строки

include "functions.php";

// №1⊗ppPmRgLB
task(1);
// Дана строка:
$str = 'abc def xyz';
// Напишите регулярку, которая найдет первую подстроку из букв.
echo preg_replace("#^[a-zA-z]*#", "___", $str);


// №2⊗ppPmRgLB
task(2);
// Дана строка:
$str = 'abc def xyz';
// Напишите регулярку, которая найдет последнюю подстроку из букв.
echo preg_replace("#[a-zA-z]+$#", "___", $str);
