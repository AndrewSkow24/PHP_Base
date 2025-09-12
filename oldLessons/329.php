<?php

require_once "connectDB.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>328</title>
</head>

<body>
    <h2>Task 1</h2>
    <p>
        Используя созданный ранее вами дамп таблицы users приведите ее в исходное состояние.
    </p>
    <?php
    ?>
    <h2>Task 2</h2>
    <p>
        Юзеру с id 4 поставьте возраст 35 лет.
    </p>
    <?php
    $query = "UPDATE users set age=35 WHERE id=4";
    mysqli_query($link, $query);
    ?>
    <h2>Task 3</h2>
    <p>
        Всем, у кого зарплата 500, сделайте ее 700.
    </p>
    <?php
    $query2 = "UPDATE users set salary=700 WHERE salary=500";
    mysqli_query($link, $query2);
    ?>
    <h2>Task 4</h2>
    <p>
        Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
    </p>
    <?php
    $query3 = "UPDATE users set age=23 WHERE id>2 and id<=5";
    mysqli_query($link, $query3);
    ?>
</body>

</html>