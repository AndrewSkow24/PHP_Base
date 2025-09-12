<?php

include "functions.php";

// №1⊗ppPmUFRN
task(1);
// Что выведется на экран в результате выполнения следующего кода:

function func($num)
{
    return $num;

    $res = $num * $num;
    return $res;
}

echo func(3); // 3 - т.к. после return уже ничего не выполнится 

// Объясните почему.

// №2⊗ppPmUFRN
task(2);
// Что выведет каждый из echo в результате выполнения следующего кода:

function func2($num)
{
    if ($num <= 0) {
        return abs($num);
    } else {
        return $num * $num;
    }
}

echo func2(10); // 100 
echo func2(-5); // 5 

// Объясните почему.

// №3⊗ppPmUFRN
task(3);
// Что выведет каждый из echo в результате выполнения следующего кода:


function func3($num)
{
    if ($num <= 0) {
        return abs($num);
    }

    return $num * $num;
}

echo func3(10); // 100 
echo func3(-5); // 5

// Объясните почему.