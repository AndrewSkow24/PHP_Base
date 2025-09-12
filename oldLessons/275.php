<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} elseif ($_SESSION['counter'] >= 10) {
    unset($_SESSION['counter']);
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

echo "<a href=\"\\275.php\">Обновить страницу</a>";

echo $_SESSION['counter'];
