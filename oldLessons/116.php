<?php

// Дан массив:

$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];

//С помощью цикла foreach выведите на экран
// имена юзеров и соответствующие им возраста.

foreach ($arr as $key => $value) {
    echo "$key - $value\n";
}
