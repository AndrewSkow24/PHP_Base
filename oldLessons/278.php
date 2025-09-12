<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>278</title>
</head>

<body>
    <?php
    session_start();

    if (!empty($_POST)) {
    }
    $_SESSION = $_POST;
    ?>

    <form action="" method="POST">
        <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>" placeholder="Имя:">
        <input type="text" name="age" value="<?= $_POST['age'] ?? '' ?>" placeholder="Возраст:">
        <input type="text" name="salary" value="<?= $_POST['salary'] ?? '' ?>" placeholder="Зарплата:">
        <input type="text" name="status" value="<?= $_POST['status'] ?? '' ?>" placeholder="Статус">
        <input type="submit" style="margin-top: 20px">
    </form>

    <p>
        <a href="278_1.php" target="_blank">Посмотреть введённые данные</a><br>
        <a href="logout.php" target="_blank">Закрыть сессию</a>
    </p>
</body>

</html>