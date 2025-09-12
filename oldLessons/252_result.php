<?php

echo '<h2>Массив $_GET</h2>';
print_r($_GET);

// echo '<h2>Массив $_POST</h2>';
// print_r($_POST);

// echo '<h2>Массив $_REQUEST</h2>';
// print_r($_REQUEST);


echo "<h2>Результат сложения</h2>";

$result = $_GET['number1'] + $_GET['number2'] + $_GET['number3'];
echo "<p>$result</p>";
