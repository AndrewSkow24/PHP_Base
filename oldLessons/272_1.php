<?php

session_start();
$_SESSION['test'] = 'abcde'; // записали в сессию 
echo "<h2>Запись в сессию</h2>";
$_SESSION['num1'] = 15;
$_SESSION['num2'] = 16;
