<?php

include "functions.php";

// №1⊗ppPmRcMAS
task(1);
// Дан многомерный массив произвольного уровня вложенности, например, такой:
$arr = [
    1,
    2,
    3,
    [4, 5, [6, 7]],
    [8, [9, 10]]
];
// С помощью рекурсии найдите сумму элементов этого массива.
function getSumArr($arr)
{
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += getSumArr($elem);
        } else {
            $sum += $elem;
        }
    }
    return $sum;
}

echo getSumArr($arr);

// №2⊗ppPmRcMAS
task(2);
// Дан многомерный массив произвольного уровня вложенности, содержащий внутри себя строки, например, такой:


$arr = [
    'a',
    ['b', 'c', 'd'],
    ['e', 'f', ['g', ['j', 'k']]]
];

function getJoinedString($arr)
{
    $str = "";

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $str .= getJoinedString($elem);
        } else {
            $str .= $elem;
        }
    }

    return $str;
}
// С помощью рекурсии слейте элементы этого массива в одну строку:
echo getJoinedString($arr);
// 'abcdefgjk'