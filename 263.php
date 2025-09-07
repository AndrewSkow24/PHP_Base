<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>263</title>
</head>

<body>
    <h1>Сохранение значения</h1>
    <form action="" method="POST">
        <input type="hidden" name="flag" value="0">
        <label for="">Вам есть 18 лет ?</label>
        <input type="checkbox" name="flag" value="1"
            <?php if (!empty($_POST['flag'])) echo 'checked' ?>>
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