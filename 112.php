<?php

// №1⊗ppPmCdMst
// Код должен проверить сумму чисел:
echo "\nTask 1\n";

$num1 = '1';
$num2 = '2';

if ($num1 + $num2 === 3) {
    echo '+++'; // должно вывести это
} else {
    echo '---';
}

//     №2⊗ppPmCdMst
// Код должен проверить первую цифру числа:

echo "\nTask 2\n";
$num = 123;

if (((string)$num)[0] == 1) {
    echo '+++';
} else {
    echo '---';
}

// №3⊗ppPmCdMst
// Код должен проверить первую цифру числа:

echo "\nTask 3\n";

$num = 123;

if (((string)$num)[0] === "1") {
    echo '+++';
} else {
    echo '---';
}

// №4⊗ppPmCdMst
// Код должен проверить первую цифру числа:

echo "\nTask 4\n";
$num = 123;
$str = (string)$num;

if ($str[0] === "1") {
    echo '+++';
} else {
    echo '---';
}
// №5⊗ppPmCdMst
// Код должен проверить, что в числе ровно две цифры:

echo "\nTask 5\n";

$num = 12;
// без ошибок - так допустимо 
if (strlen($num) === 2) {
    echo '+++';
} else {
    echo '---';
}

// №6⊗ppPmCdMst
// Код должен проверить первую цифру числа:

echo "\nTask 6\n";

$num = 123;
$str = (string) $num;

if ($str[0] === '1') {
    echo '+++';
} else {
    echo '---';
}


// №7⊗ppPmCdMst
// Код должен проверить, что в числе ровно две цифры:

echo "\nTask 7\n";

$num = 12;
$str = (string) $num;

if (strlen($str) === 2) {
    echo '+++';
} else {
    echo '---';
}

// №8⊗ppPmCdMst
// Приведенный код работает не так, как задумал автор:

echo "\nTask 8\n";

$num = 1;

if ($num !== 1 or $num !== 2) {
    echo '+++';
} else {
    echo '---'; // должно вывести это
}

// вероятно спутал and и or - не понятно чего автор хотел 

// Объясните причину.
// №9⊗ppPmCdMst
// Приведенный код работает не так, как задумал автор:

echo "\nTask 9\n";

$var1 = '1';
$var2 = '2';

if ((int)($var1 + 1) === (int)$var2) {
    echo '+++'; // должно сработать это
} else {
    echo '---';
}

// Объясните причину.