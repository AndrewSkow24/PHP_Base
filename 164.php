<?php
// №1⊗ppPmUFAdv

// Напишите, какие недостатки у следующего кода, и исправьте их:


function getSunOfArrElements($arr)
{
    $res = 0;

    foreach ($arr as $elem) {
        $res += $elem;
    }

    return $res;
}

// №2⊗ppPmUFAdv

// Напишите, какие недостатки у следующего кода, и исправьте их:

function getDivOfSumTwoArrays($arr1, $arr2)
{
    return getSunOfArrElements($arr1) / getSunOfArrElements($arr2);
}

// №3⊗ppPmUFAdv

// Напишите, какие недостатки у следующего кода, и исправьте их:


function getProdArrElements($arr)
{
    $res = 1;

    foreach ($arr as $elem) {
        $res *= $elem;
    }

    return $res;
}
