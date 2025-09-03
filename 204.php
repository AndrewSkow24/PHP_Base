<?php

/* 

Проверка строки с помощью регулярки на PHP 

Поиском и заменой возможности регулярок далеко не исчерпаны.

Существует также функция preg_match(), которая проверяет есть ли в 
строке совпадение с регуляркой. 

Первым параметром функция принимает регулярное выражение, а вторым 
строку поиска. 

При этом если совпадений будет много - функция найдёт только первое и 
закончит работу. Поэтому функция выводит либо 1 либо 0 и используется 
для ответа на вопрос - есть ли искомое в строке или нет 

Вернёт 1 - значит есть, а сколько раз не ясно, 
вернёт 0 - значит нет 

*/

include "functions.php";


task(1);
// Определите, есть ли в строке 3 цифры подряд.
echo preg_match("#\d{3}#", "123 456 1");
echo preg_match("#\d{3}#", "avc 12");

// №2⊗ppPmRgSCh
task(2);
// Определите, начинается ли переданная строка с http.
echo preg_match("#^http#", "http://something.com");
echo preg_match("#^http#", "___http://something.com");

// №3⊗ppPmRgSCh
task(3);
// Определите, начинается ли переданная строка с http или с https.
echo preg_match("#^http|^https#", "http://something.com");
echo preg_match("#^http|^https#", "https://something.com");
echo preg_match("#^http|^https#", "//https://something.com");

// №4⊗ppPmRgSCh
task(4);
// Определите, заканчивается ли переданная строка расширением txt,
// html или php.
echo preg_match("#html$|php$|txt$#", ".php");
echo preg_match("#html$|php$|txt$#", "file.txt");
echo preg_match("#html$|php$|txt$#", "file.json");
echo preg_match("#html$|php$|txt$#", "index.html");

// №5⊗ppPmRgSCh
task(5);
// Определите, заканчивается ли переданная 
// строка расширением jpg или jpeg.
echo preg_match("~.jpg$|.jpeg$~", "photo8.jpg");
echo preg_match("~.jpg$|.jpeg$~", "photo10.jpeg");
echo preg_match("~.jpg$|.jpeg$~", "picture3.bmp");
