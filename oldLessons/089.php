<?php

// в сокрашённых операциях сравнение идёт по ==, а не по ===

// №1⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = 3;

if ($test) {
    echo "\n1-ok";
} else {
    echo '---';
}



// №2⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = 'abc';

if ($test) {
    echo "\n2-ok";
} else {
    echo '---';
}

// №3⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = '';

if ($test) {
    echo '+++';
} else {
    echo "\n3-ok";
}

// №4⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


// $test = 3 * 'abc'; // fatal error

// if ($test) {
//     echo '+++';
// } else {
//     echo "\n4-ok";
// }

// №5⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = null;

if ($test) {
    echo '+++';
} else {
    echo "\n5-ok";
}

// №6⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = false;

if ($test) {
    echo '+++';
} else {
    echo "\n6-ok";
}

// №7⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test;

if ($test) {
    echo '+++';
} else {
    echo "\n7-ok";
}

// №8⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = 0;

if ($test) {
    echo '+++';
} else {
    echo "\n8-ok 0!=false";
}

// №9⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = '0';

if ($test) {
    echo '+++';
} else {
    echo "\n9-ok '0'==false";
}

// №10⊗ppPmCdBN
// Не запуская код, определите, что выведется на экран:


$test = -1;

if ($test) {
    echo "\n10-ok";
} else {
    echo '---';
}
