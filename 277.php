<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>277_1</title>
</head>

<body>
    <?php
    session_start();

    if (!empty($_POST)) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['patronymic'] = $_POST['patronymic'];
        $_SESSION['surname'] = $_POST['surname'];
    }

    ?>

    <form action="" method="POST">
        <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>" placeholder="Имя:">
        <input type="text" name="patronymic" value="<?= $_POST['patronymic'] ?? '' ?>" placeholder="Отчество:">
        <input type="text" name="surname" value="<?= $_POST['surname'] ?? '' ?>" placeholder="Фамилия:">
        <input type="submit" style="margin-top: 20px">
    </form>

    <p>
        <a href="277_1.php" target="_blank">Посмотреть введённые данные</a><br>
        <a href="logout.php" target="_blank">Закрыть сессию</a>
    </p>
</body>

</html>