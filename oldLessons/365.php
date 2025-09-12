<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365</title>
    <style>
        .user-card {
            background-color: yellowgreen;
            border-radius: 15px;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="имя:">
        <input type="text" name="age" placeholder="возраст: ">
        <input type="text" name="salary" placeholder="зарплата: ">
        <input type="submit">
    </form>


    <?php

    session_start();

    require_once "connectDB.php";



    if (!empty($_POST)) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $query = "INSERT INTO users (name, age, salary) VALUES ('$name', '$age', '$salary')";
        mysqli_query($link, $query);

        // header("Location: http://localhost:8888/phpMyAdmin5/index.php?route=/sql&db=mydb&table=users&pos=0");
        header("Location: /");
        // die();
    }

    $res = mysqli_query($link, "SELECT * FROM users");
    for ($arrUsers = []; $row = mysqli_fetch_assoc($res); $arrUsers[] = $row);
    $_SESSION['flash'] = 'форма успешно сохранена';
    ?>

    <h2>Список пользователей</h2>
    <div>
        <?php foreach ($arrUsers as $user): ?>
            <div class="user-card">
                <h3> <?= $user['name'] ?> </h3>
                <p>Возраст: <b> <?= $user['age'] ?> </b> </p>
                <p>зарплата: <b> <?= $user['salary'] ?> </b> </p>
            </div>
        <?php endforeach; ?>
    </div>


</body>

</html>