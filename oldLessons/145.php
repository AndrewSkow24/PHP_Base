<?php

include "functions.php";

task(1);
$arr = [
    [
        'country' => 'Россия',
        'city' =>    'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Минск',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Питер',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Могилев',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Киев',
    ],
];

$res = [];
foreach ($arr as $arrElement) {
    $res[$arrElement['country']][] = $arrElement['city'];
}
print_r($res);

task(2);
$arr = [
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];

$res = [];
foreach ($arr as $arrElement) {
    $res[$arrElement['date']][] = $arrElement['event'];
}
print_r($res);

task(3);
$arr = [
    '2019-12-29' => ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30' => ['name5', 'name6', 'name7'],
    '2019-12-31' => ['name8', 'name9'],
];

$resMain = [];
$resDate = [];
$resEvent = [];
foreach ($arr as $data => $event) {
    foreach ($event as $elem) {
        //echo "$data - $elem\n";
        $resDate[] = $data;
        $resEvent[] = $elem;
    }
}

foreach ($resDate as $date) {
    foreach ($resEvent as $event) {
        for ($i = 0; $i < count($resDate); $i++) {
            $resMain[$i]['date'] = $date;
            $resMain[$i]['event'] = $event;
        }
    }
}

print_r($resMain);
