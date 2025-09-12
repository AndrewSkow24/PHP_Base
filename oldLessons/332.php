<?php

require_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>332</title>
</head>

<body>
    <h1>Ограничение количества записей SQL</h1>
    <h2>Task 1</h2>
    <p>
        Получите первых 4 юзера.
    </p>
    <?php
    $request = "SELECT * FROM users LIMIT 4";
    printTableAnswer($request);
    ?>
    <h2>Task 2</h2>
    <p>
        Получите юзеров со второго, 3 штуки.
    </p>
    <?php
    $request = "SELECT * FROM users LIMIT 1, 3";
    printTableAnswer($request);
    ?>
    <h2>Task 3</h2>
    <p>
        Отсортируйте юзеров по возрастанию зарплаты и получите первых 3 работника из результата сортировки.
    </p>
    <?php
    $request = "SELECT * FROM users ORDER BY salary LIMIT 3";
    printTableAnswer($request);
    ?>
    <h2>Task 4</h2>
    <p>
        Отсортируйте юзеров по убыванию зарплаты и получите первых 3 юзера из результата сортировки.
    </p>
    <?php
    $request = "SELECT * FROM users ORDER BY  salary DESC LIMIT 3";
    printTableAnswer($request);
    ?>
</body>

</html>