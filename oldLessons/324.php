<?php

include "connectDB.php";

function printAnswerRequest($query)
{
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя  пользователя 
    $pass = 'root';          // пароль
    $name = 'mydb';      // имя базы  данных 

    $link = mysqli_connect(
        $host,
        $user,
        $pass,
        $name
    );

    $res = mysqli_query($link, $query);
    // пишем данные в массив
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    foreach ($data as $user) {
        // print_r($user);
        echo "<ul>";
        foreach ($user as $key => $value) {
            echo "<li>$key --- $value</li>";
        }
        echo "</ul>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>324</title>
</head>

<body>
    <h1>Выборка записей при SQL запросе к базе PHP</h1>
    <h2>Практические задачи</h2>


    <h3>Task 1</h3>
    <p>
        Выберите юзера с id, равным 3.
    </p>
    <?php
    $query = 'SELECT * FROM users WHERE id=3';
    $res = mysqli_query($link, $query);
    // пишем данные в массив
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    foreach ($data as $user) {
        // print_r($user);
        echo "<ul>";
        foreach ($user as $key => $value) {
            echo "<li>$key --- $value</li>";
        }
        echo "</ul>";
    }
    ?>

    <h3>Task 2</h3>
    <p>
        Выберите юзеров с зарплатой 900.
    </p>
    <?php
    $query = 'SELECT * FROM users WHERE salary=900';
    $res = mysqli_query($link, $query);
    // пишем данные в массив
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    foreach ($data as $user) {
        echo "<ul>";
        foreach ($user as $key => $value) {
            echo "<li>$key --- $value</li>";
        }
        echo "</ul>";
    }
    ?>
    <h3>Task 3</h3>
    <p>
        Выберите юзеров в возрасте 23 года.
        <?php
        $query = 'SELECT * FROM users WHERE age=23';
        printAnswerRequest($query);
        ?>
    </p>
    <h3>Task 4</h3>
    <p>
        Выберите юзеров с зарплатой более 400.
    </p>
    <?php
    $query = 'SELECT * FROM users WHERE salary>400';
    printAnswerRequest($query);
    ?>
    <h3>Task 5</h3>
    <p>
        Выберите юзеров с зарплатой равной или большей 500.
    </p>
    <?php
    $query = 'SELECT * FROM users WHERE salary>=500';
    printAnswerRequest($query);
    ?>
    <h3>Task 6</h3>
    <p>
        Выберите юзеров с зарплатой НЕ равной 500.
    </p>
    <?php
    $query = 'SELECT * FROM users WHERE salary!=500';
    printAnswerRequest($query);
    ?>
    <h3>Task 7</h3>
    <p>
        Выберите юзеров с зарплатой равной или меньшей 500.
    </p>
    <?php
    $query = 'SELECT * FROM users WHERE salary<=500';
    printAnswerRequest($query);
    ?>
</body>

</html>