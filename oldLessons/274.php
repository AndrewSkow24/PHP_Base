<?php

// использование сессий на одной странице 

// счётчик обновления страницы 

session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // первый заход на страницу
} else {
    $_SESSION['counter']++; // последующие заходы на страницу
}

echo "<p>Счётчик посещений: <b>{$_SESSION['counter']}</b></p>";

echo "<h2>Task 1</h2>";

/* 
Запишите в сессию время захода пользователя на сайт.
При обновлении страницы выводите сколько секунд назад пользователь
зашел на сайт.
*/

$_SESSION['date'] = time();


if (!isset($_SESSION['firstVisit'])) {
    $_SESSION['firstVisit'] = time();
} else {
    $timePass = time() - $_SESSION['firstVisit'];
    echo "<p>Прошло времени от первого входа: $timePass секунд</p>";
}
