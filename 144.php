<?php

// Дан следующий массив:

$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];

// Выведите с помощью этого массива столбец продуктов
// в каком-нибудь придуманном вами формате.

foreach ($products as $product) {
    echo $product['name'] . "-" . $product['price'] . "-" .  $product['amount'] . "\n";
}
