<?php
$pass = '12345';

if ($_POST['pass'] == $pass) $result = "Правильный пароль";
else $result = "Неправильный пароль!";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>253</title>
</head>

<body>
    <h2>Task 1</h2>
    <p>
        С помощью формы спросите у пользователя его имя и возраст.
        После отправки формы выведите эти данные на экран.
    </p>
    <form action="253.php" method="POST">
        <input type="text" name="name" placeholder="имя">
        <input type="text" name="age" placeholder="возраст">
        <input type="submit">
    </form>

    <p>
        Имя: <?= $_POST['name'] ?> <br>
        Возраст: <?= $_POST['age'] ?>

    </p>

    <h2>Task 2</h2>
    <form action="/253.php" method="POST">
        <input type="password" name="pass">
        <input type="submit">
    </form>
    <p>
        <?= $result ?>
    </p>
</body>

</html>