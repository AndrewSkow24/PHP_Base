<?php

require_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>325</title>
</head>

<body>
    <h1>Логические операции в SQL</h1>
    <h2>Task 1</h2>
    <p>
        Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно).
    </p>
    <?php
    $request = "SELECT * FROM users WHERE age>25 AND age>=28";
    printAnswerRequest($request);
    ?>
    <h2>Task 2</h2>
    <p>
        Выберите юзера user1.
    </p>
    <?php
    $request = "SELECT * FROM users WHERE name='user1'";
    printAnswerRequest($request);
    ?>
    <h2>Task 3</h2>
    <p>
        Выберите юзеров user1 и user2.
    </p>

    <?php
    $request = "SELECT * FROM users WHERE name='user1' OR name='user2'";
    printAnswerRequest($request);
    ?>
    <h2>Task 4</h2>
    <p>
        Выберите всех, кроме юзера user3.
    </p>
    <?php
    $request = "SELECT * FROM users WHERE name!='user3' ";
    printAnswerRequest($request);
    ?>
    <h2>Task 5</h2>
    <p>
        Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000.
    </p>
    <?php
    $request = "SELECT * FROM users WHERE age=27 OR salary=1000";
    printAnswerRequest($request);
    ?>
    <h2>Task 6</h2>
    <p>
        Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400.
    </p>
    <?php
    $request = "SELECT * FROM users WHERE age=27 OR salary!=400";
    printAnswerRequest($request);
    ?>
    <h2>Task 7</h2>
    <p>
        Выберите всех юзеров в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000.
    </p>
    <?php
    $request = "SELECT * FROM users WHERE age>=23 and age<27 OR salary=1000";
    printAnswerRequest($request);
    ?>
    <h2>Task 8 </h2>

    <p>
        Выберите всех юзеров в возрасте от 23 лет до 27 лет или с зарплатой от 400 до 1000.
    </p>
    <?php
    $request = "SELECT * FROM users WHERE age>=23 and age<27 OR salary>=400 and salary<100";
    printAnswerRequest($request);
    ?>
</body>

</html>