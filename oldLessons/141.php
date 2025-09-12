<?php

include "functions.php";

$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];


foreach ($arr as $user) {
    foreach ($user as $key => $value) {
        echo "$key - $value\n";
    }
}

task(2);
// С помощью двух вложенных циклов выведите элементы этого
// массива в формате имя группы - имя юзера.

$arr = [
    'group1'  => [
        'user11',
        'user12',
        'user13',
        'user43'
    ],
    'group2'  => [
        'user21',
        'user22',
        'user23'
    ],
    'group3'  => [
        'user31',
        'user32',
        'user33'
    ],
    'group4'  => [
        'user41',
        'user42',
        'user43'
    ],
    'group5'  => ['user51', 'user52'],
];

foreach ($arr as $nameGroup => $users) {
    foreach ($users as $user) {
        echo "$nameGroup - $user\n";
    }
}
