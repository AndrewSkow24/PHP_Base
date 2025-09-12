<?php

include "functions.php";

/* Изменение одноимённых внутренних переменных никак 
не затрагивает внешние */

// №1⊗ppPmScSV
task(1);
// Расскажите, каким будет результат выполнения кода:

$aaa = 111;

function func()
{
    $aaa = 222;
}

func();
echo $aaa; // 111
// №2⊗ppPmScSV
task(2);
// Расскажите, каким будет результат выполнения кода:

// $aaa = 111;

// function func2()
// {
//     $aaa++; // warning
// }

// func2();
// echo $aaa; // 111
// №3⊗ppPmScSV
task(3);
// Расскажите, каким будет результат выполнения кода:

$aaa = 111;

function func3()
{
    $aaa = 222;
    return $aaa;
}

echo func3(); // 222 
