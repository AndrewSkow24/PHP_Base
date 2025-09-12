<?php

// Дан следующий массив:


$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];

// Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.

foreach ($products as $product) {
    echo "\n";
    foreach ($product as $key => $value) {
        echo "$key - $value\n";
    }
}
