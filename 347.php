<?php

require_once("connectDB.php");

// получение массива 
$res = mysqli_query($link, "SELECT * FROM users");
for ($usersArr = []; $row = mysqli_fetch_assoc($res); $usersArr[] = $row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>347</title>
</head>

<body>
    <h1>Список пользователей</h1>
    <ul>
        <?php foreach ($usersArr as $user): ?>
            <li>
                <a href="?id=<?= $user['id'] ?>">Показать id= <?= $user['id'] ?> </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php if (isset($_GET['id'])): ?>
        <div>
            <p>
                имя: <span class="name"> <?= $user['name'] ?> </span>
            </p>
            <p>
                возраст: <span class="age"> <?= $user['age'] ?> </span>,
                зарплата: <span class="salary">
                    <?= $user['salary'] ?> </span>,
            </p>
        </div>
    <?php endif; ?>
</body>

</html>