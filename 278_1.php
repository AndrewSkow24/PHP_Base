<?php

session_start();

echo "<ul>";
foreach ($_SESSION as $key => $value) {
    echo "<li>$key ---- $value</li>";
}

echo "</ul>";
