<?php

// Дан многомерный массив произвольного уровня вложенности, например, такой:

$arr = [1, [2, 7, 8], [3, 4], [
    5,
    [6, 7]
]];

// Возведите все элементы-числа этого массива в квадрат.


function eachElementSquare(&$arr)
{
    foreach ($arr as &$element) {
        if (is_array($element)) {
            eachElementSquare($element);
        } else {
            $element **= 2;
        }
    }
}

eachElementSquare($arr);

print_r($arr);
