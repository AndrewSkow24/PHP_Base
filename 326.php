<?php
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>326</title>
</head>

<body>
    <h1>Поля выборки при SQL запросе</h1>
    <h2>Task 1</h2>
    <p>
        Выберите из таблицы users имя, возраст и зарплату для каждого работника.
    </p>

    <?php
    $request = "SELECT name, age, salary from users";
    printAnswerRequest($request);
    ?>
    <h2>Task 2</h2>
    <p>
        Выберите из таблицы users имена всех работников.
    </p>
    <?php
    $request = "SELECT name from users";
    printAnswerRequest($request);
    ?>
</body>

</html>