<?php

session_start();
echo $_SESSION['test']; // чтение из сессии 
echo "<h2>Чтение из сессии</h2>";
$sum = $_SESSION['num1'] + $_SESSION['num2'];
echo "<p>Сумма чисел: 
<b> $sum </b>
</p>";
