<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>262</title>
</head>

<body>
    <h1>Нюансы использования чекбоксов в PHP</h1>
    <form action="" method="POST">
        <input type="hidden" name="flag" value="0">
        <label for="">Вам есть 18 лет ?</label>
        <input type="checkbox" name="flag" value="1">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)) {
        if ($_POST['flag'] == 1) {
            echo "<p>Доступ разрешён!</p>";
        } else echo "<p>Доступ запрещён!</p>";
    }
    ?>
</body>

</html>