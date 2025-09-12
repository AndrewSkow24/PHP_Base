<?php

include 'functions.php';

// №1⊗ppPmLpALF
// С помощью цикла заполните массив числами от 1 до 100.
task(1);
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
var_dump($arr);

// №2⊗ppPmLpALF
// С помощью цикла заполните массив нечетными числами в
// промежутке от 1 до 99.
task(2);
$arr = [];
for ($i = 1; $i <= 99; $i += 2) {
    $arr[] = $i;
}

print_r($arr);
