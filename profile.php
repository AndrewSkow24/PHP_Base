<?php

session_start();

require_once "connectDB.php";

$login = $_GET['login'];

$res = mysqli_query($link, "SELECT * from users where login='$login'");

$userData = mysqli_fetch_assoc($res);


// вычисление возраста - писать в скобках рядом с датой рождения 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .main {
            margin: 20px;
        }

        .userProfile {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            row-gap: 20px;
        }

        .content-card {
            background: linear-gradient(45deg, yellow, green);
            min-width: 47%;
            border-radius: 15px;
            padding: 20px;
            transition: all 0.3s ease;

        }

        .content-card:hover {
            min-width: 48%;
            font-size: 20px;
            background: linear-gradient(90deg, yellow, green);

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="main">
        <h1>Профиль <?= $login ?></h1>
        <div class="userProfile">
            <div class="content-card">
                <h2>id</h2>
                <p><?= $userData['id'] ?></p>
            </div>
            <div class="content-card">
                <h2>Дата рождения</h2>
                <p><?= $userData['dateBirth'] ?></p>
            </div>
            <div class="content-card">
                <h2>Email</h2>
                <p><?= $userData['email'] ?></p>
            </div>
            <div class="content-card">
                <h2>Дата регистрации</h2>
                <p><?= $userData['created_at'] ?></p>
            </div>
            <div class="content-card">
                <h2>Страна проживания</h2>
                <p><?= $userData['country'] ?></p>
            </div>
            <div class="content-card">
                <h2>Имя</h2>
                <p><?= $userData['name'] ?></p>
            </div>
            <div class="content-card">
                <h2>Фамилия</h2>
                <p><?= $userData['surname'] ?></p>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>