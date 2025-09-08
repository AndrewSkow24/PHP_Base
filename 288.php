<?php

include "functions.php";

// №1⊗ppPmFSFRWC
task(1);
// Пусть у вас есть файл, в котором записано некоторое число. 
// Откройте этот файл, возведите число в квадрат и запишите 
// обратно в файл.
file_put_contents('288.txt', 123);
$num = file_get_contents('288.txt');
file_put_contents('288.txt', $num . "=" . $num ** 2);


// №2⊗ppPmFSFRWC
task(2);
// Пусть в корне вашего сайта лежит файл count.txt. 
// Изначально в нем записано число 0. Сделайте так, 
// чтобы при обновлении страницы наш скрипт каждый раз 
// увеличивал это число на 1. То есть у нас получится 
// счетчик обновления страницы в виде файла.
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = file_get_contents("count.txt");
} else {
    $_SESSION['counter']++;
    echo $_SESSION['counter'];
    file_put_contents('count.txt', $_SESSION['counter']);
}

echo "Содержимое файла: " . file_get_contents('count.txt');

// №3⊗ppPmFSFRWC
task(3);
// Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. 
// Вручную сделайте массив с именами этих файлов. 
// Переберите его циклом, прочитайте содержимое каждого из файлов, 
// слейте его в одну строку и запишите в новый файл new.txt. 
// Изначально этого файла не должно быть.

$files = ["1.txt", '2.txt', '3.txt'];

$str = "";

foreach ($files as $fileName) {
    $str .= file_get_contents($fileName);
    file_put_contents('new.txt', $str);
}

echo "Содержимое файла: " . file_get_contents('new.txt');
