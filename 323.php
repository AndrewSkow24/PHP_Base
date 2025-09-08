<?php

include "connectDB.php";

$res = mysqli_query($link, 'SELECT * from users');

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

foreach ($data as $user) {
    echo "<h2>$user[name]</h2>";
    echo "<ul>";
    foreach ($user as $key => $value) {
        echo "<li>$key --- $value</li>";
    }
    echo "</ul>";
}
