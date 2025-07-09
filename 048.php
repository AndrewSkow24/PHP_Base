<?php

include 'html.php';

task_heading(1);
p("Переделайте этот код так,
чтобы в нем были операции инкремента и декремента:");

$num = 10;
$num++;
$num++;
$num--;
echo $num;
