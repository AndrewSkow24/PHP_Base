<?php

require_once "connectDB.php";

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($link, $query);

$user = mysqli_fetch_assoc($result);

// print_r($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование пользователя</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h1 class="form-tile">Редактирование пользователя</h1>
        <form action="save.php?id=<?= $_GET['id'] ?>" method="POST">

            <div class="form-group">
                <label for=""> Имя:</label>
                <input type="text" name="name" value="<?= $user['name'] ?>">
            </div>

            <div class="form-group">
                <label for=""> Возраст:</label>
                <input type="text" name="age" value="<?= $user['age'] ?> ">
            </div>

            <div class="form-group">
                <label for=""> Зарплата:</label>
                <input type="text" name="salary" value="<?= $user['salary'] ?? '' ?> ">
            </div>

            <input class="submit-btn" type="submit">
        </form>
    </div>
</body>

</html>