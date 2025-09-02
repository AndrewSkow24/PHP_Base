<?php

include "functions.php";

// №1⊗ppPmScGV

// Исправьте код так, чтобы он заработал согласно задуманному:

$num = 1;

function func()
{
    // внутри функции сначала делаем объявление о том, 
    // что будем пользоваться глобальной функцией
    global $num;
    $num++;
}

func();
echo $num; // должно вывести 2

//     №2⊗ppPmScGV
task(2);
// Исправьте код так, чтобы он заработал согласно задуманному:

$num = 1;

function func2()
{
    global $num;
    $num++;
    return $num;
}

echo func2(); // должно вывести 2

// №3⊗ppPmScGV
task(3);
// Исправьте код так, чтобы он заработал согласно задуманному:

$num = 1;

function func3()
{
    global $num;
    return $num;
}

echo func3(); // должно вывести 1
