<?php

include 'html.php';

h1("Длина строки в PHP");
p("Количество символов в строке можно найти с помощью
функции <b>strlen</b>");

echo strlen("abcde"); // 5

p("Строка может хранится в переменной: ");
$str = 'abcde';
echo strlen($str);

p("Пробел также является символом:");
echo strlen('ab de');

task_heading(1);
p("Запишите в переменную какую-нибудь строку.
Выведите на экран длину вашей строки.");

$myString = 'This is my string';
echo strlen($myString);
