<?php

// ?? - оператор объединения с null 

$user = [
    'name' => "John",
    'age' => 30
];

$name = $user['name'] ?? "unknown";

echo $name;
