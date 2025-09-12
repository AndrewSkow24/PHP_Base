<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>346</title>
</head>

<body>
    <h1>Удаление данных из БД c помощью GET-запросов</h1>
    <h2>Task 1</h2>
    <a href="346.php/?del=6">Удалить id=6</a>
    <?php

    require_once 'connectDB.php';

    if (isset($_GET['del'])) {
        $del = $_GET['del'];
        // Запрос на удаление 
        $query = "DELETE FROM users WHERE id=$del";
        mysqli_query($link, $query);
        echo "<script>alert('Запись с id $del удалена');</script>";
    }

    ?>

    <h2>Task 2</h2>
    <p>
        Модифицируйте предыдущую задачу так, чтобы на странице были ссылки для удаления каждого юзера.
        Ссылки, конечно же, должны формироваться в цикле из полученных из БД данных.
    </p>
    <?php
    $res = mysqli_query($link, "SELECT * FROM users");
    for ($userArray = []; $row = mysqli_fetch_assoc($res); $userArray[] = $row);
    ?>
    <?php foreach ($userArray as $user) {
        echo "<li> $user[name]
        <a href=\"346.php?del=$user[id]\">Удалить id=$user[id]</a>
        </li>";
    }
    ?>
    <h2>Task 4</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>salary</th>
            <th>delete</th>
        </tr>
        <?php foreach ($userArray as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['age'] ?></td>
                <td><?= $user['salary'] ?></td>
                <td> <a href="346.php?del=<?= $user['id'] ?>">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>


    </table>

</body>

</html>