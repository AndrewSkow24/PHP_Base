<?php

// функция isset() проверяет не null ли переменная 

$test = null;

if (isset($test)) {
    echo "не null переменная";
} else {
    echo "null переменная";
}
