<?php

include "functions.php";

// №1⊗ppPmScPC
task(1);
// Расскажите, каким будет результат выполнения кода:

$aaa = 'a';

function func($bbb)
{
    $bbb = 'b';
}

func($aaa);
echo $aaa; // 'a'

// №2⊗ppPmScPC
task(2);
// Расскажите, каким будет результат выполнения кода:


// $aaa = 'a';

// function func2($bbb)
// {
//     $bbb = 'b';
// }

// func2($aaa);
// echo $bbb; // warning: undef var 

// №3⊗ppPmScPC
task(3);
// Расскажите, каким будет результат выполнения кода:


$str = 'a';

function func3($str)
{
    $str = 'b';
}

func3($str);
echo $str; // 'a'

// №4⊗ppPmScPC
task(4);
// Расскажите, каким будет результат выполнения кода:


$arr = [1, 2, 3, 4, 5];

function func4($arr)
{
    $arr[0] = '!';
}

func4($arr);
var_dump($arr); // [1,2,3,4,5]
