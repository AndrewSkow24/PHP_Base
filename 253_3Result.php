<?php

$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];


$days = [
    "воскресенье",
    "понедельник",
    "вторник",
    "среда",
    "четверг",
    "пятница",
    "суббота",
    "воскресенье"
];

$dateObject = date_create("$year-$month-$day");
echo date_format($dateObject, "Y-m-d----w");
echo $days[(date_format($dateObject, 'w'))];
