<?php

require_once "connectDB.php";
require_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>348</title>
</head>

<body>
    <h1>Добавление новой записи в БД</h1>
    <form action="" method="POST">
        <label for=""> Имя :
            <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>">
        </label> <br>
        <label for=""> Возраст:
            <input type="text" name="age" value="<?= $_POST['age'] ?? '' ?>">
        </label> <br>
        <label for=""> Зарплата:
            <input type="text" name="salary" value="<?= $_POST['salary'] ?? '' ?>">
        </label> <br>
        <input type="submit">
    </form>

    <?php
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";
        mysqli_query($link, $query);
    }
    ?>
</body>

</html>