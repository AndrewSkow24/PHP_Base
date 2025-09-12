<?php

include "functions.php";

// №1⊗ppPmScRF
task(1);
// Исправьте следующий код так, чтобы он заработал согласно задуманному:

$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
    $elem = sqrt($elem);
}

print_r($arr);

// №2⊗ppPmScRF
task(2);
// Исправьте следующий код так, чтобы он заработал согласно задуманному:


$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
    $elem **= 2;
}

print_r($arr);
