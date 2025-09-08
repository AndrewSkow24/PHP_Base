<?php
require_once 'connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>327</title>
</head>

<body>
    <h1>Вставка записей через SQL-запрос</h1>
    <p>
        Добавьте нового юзера 'user7', 26 лет, зарплата 300.
    </p>
    <?php
    $query = "INSERT INTO users (name, age, salary) VALUES ('user7', 26, 30)";
    mysqli_query($link, $query);
    // lesson 328
    mysqli_query($link, "INSERT INTO users (name, age, salary) VALUES ('xxx', 32, 1000)");

    ?>

</body>

</html>