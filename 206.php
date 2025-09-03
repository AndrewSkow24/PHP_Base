<?php

include "functions.php";

// №1⊗ppPmRgWSCh
task(1);
// Определите, является ли переданная строка является доменом. Используйте для тестов следующие строки:

$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -


foreach ($arr as $el) {
    echo $el . " --- " . preg_match("#^[_a-z\-0-9]{4,}\.[a-z]{2,}$#", $el) . "\n";
}

// №2⊗ppPmRgWSCh
task(2);
// Определите, является ли переданная строка является емейлом. Используйте для тестов следующие строки:
$arr = [];

$arr[] = 'addr@mail.ru';    // +
$arr[] = 'addr123@mail.ru'; // +
$arr[] = 'my-addr@mail.ru'; // +
$arr[] = 'my_addr@mail.ru'; // +
$arr[] = 'addr@site.ru';    // +
$arr[] = 'addr.ru';         // -
$arr[] = 'addr@.ru';        // -
$arr[] = 'my@addr@mail.ru'; // -

foreach ($arr as $el) {
    echo $el . " --- " . preg_match("#^[a-z0-9\-_]{4,}@[a-z]{2,}\.[a-z]{2,}$#", $el) . "\n";
}
