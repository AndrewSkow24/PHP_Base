<?php

// Переменная $num может принимать значения 1, 2, 3 или 4.
// Определите, в какую пору года попадает значение этой переменной.

$num = 6;

switch ($num) {
    case 1:
        echo "Зима";
        break;
    case 2:
        echo "Весна";
        break;
    case 3:
        echo "Лето";
        break;
    case 4:
        echo "Осень";
        break;
    default:
        echo "Время года задано некорректно!";
        break;
}
