<?php

require_once "connectDB.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>333</title>
</head>

<body>
    <h1>Подсчёт количества через COUNT</h1>
    <?php
    $query = "SELECT COUNT(*) FROM users";
    $result = mysqli_query($link, $query);
    print_r(mysqli_fetch_assoc($result));
    ?>
    <h2>Lesson 334</h2>
    <h2>Task 1</h2>
    <p>
        Подсчитайте всех юзеров с зарплатой 300.
    </p>
    <?php
    $result = mysqli_query($link, "SELECT COUNT(*) FROM users WHERE salary=300");
    echo "Результат: " . mysqli_fetch_row($result)[0] . "<br>";
    ?>
    <h2>Task 2</h2>
    <p>
        Подсчитайте всех юзеров с зарплатой 300 или возрастом 23.
    </p>
    <?php
    $result = mysqli_query($link, "SELECT COUNT(*) FROM users WHERE salary=300 or age=23");
    echo "Результат: " . mysqli_fetch_row($result)[0] . "<br>";
    ?>
</body>

</html>