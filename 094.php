<?php

// empty проверяет переменную на пустоту
// пустая переменная равна 0, '', '0', false, null


// №1⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = 0;

if (empty($test)) {
    echo "\n1-ok";
} else {
    echo '---';
}

// №2⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = -1;

if (empty($test)) {
    echo '+++';
} else {
    echo "\n2-ok";
}

// №3⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = '';

if (!empty($test)) {
    echo '+++';
} else {
    echo "\n3-ok";
}

// №4⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = -1;

if (empty($test)) {
    echo '+++';
} else {
    echo "\n4-ok";
}

// №5⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = '0';

if (!empty($test)) {
    echo '+++';
} else {
    echo "\n5-ok";
}

// №6⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = -1;

if (!empty($test)) {
    echo "\n6-ok";
} else {
    echo '---';
}

// №7⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = null;

if (empty($test)) {
    echo "\n7-ok";
} else {
    echo '---';
}

// №8⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = false;

if (!empty($test)) {
    echo '+++';
} else {
    echo "\n8-ok";
}

// №9⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = true;

if (!empty($test)) {
    echo "\n9-ok";
} else {
    echo '---';
}

// №10⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = 'false';

if (!empty($test)) {
    echo "\n10-ok";
} else {
    echo '---';
}

// №11⊗ppPmCdEm
// Не запуская код, определите, что выведется на экран:


$test = 'null';

if (!empty($test)) {
    echo "\n11-ok";
} else {
    echo '---';
}
