<?php

require_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>331</title>
</head>

<body>
    <h1>Сортировка записей в SQL</h1>
    <h2>Task 1</h2>
    <p>
        Достаньте всех юзеров и отсортируйте их по
        возрастанию зарплаты.
    </p>
    <?php
    $query = "SELECT * from users ORDER BY salary";
    printTableAnswer($query);
    ?>
    <h2>Task 2</h2>
    <p>
        Достаньте всех юзеров и отсортируйте их по убыванию зарплаты.
    </p>
    <?php
    $query = "SELECT * from users ORDER BY salary DESC";
    printTableAnswer($query);
    ?>
    <h2>Task 3</h2>
    <p>
        Достаньте всех юзеров и отсортируйте их по имени.
    </p>
    <?php
    $query = "SELECT * from users ORDER BY name";
    printTableAnswer($query);
    ?>
    <h2>Task 4</h2>
    <p>
        Достаньте юзеров с зарплатой 500 и отсортируйте их по возрасту.
    </p>
    <?php
    $query = "SELECT * from users 
    WHERE salary=500
    ORDER BY age";
    printTableAnswer($query);
    ?>
    <h2>Task 5</h2>
    <p>
        Достаньте всех юзеров и отсортируйте их по имени и по зарплате.
    </p>
    <?php
    $query = "SELECT * from users ORDER BY name, salary";
    printTableAnswer($query);
    ?>

</body>

</html>