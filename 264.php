<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>264</title>
</head>

<body>
    <h1>Радиокнопки в PHP</h1>
    <p>С помощью двух переключателей спросите у пользователя его пол. Выведите результат на экран.
    </p>
    <form action="" method="GET">
        <label for="">Ваш пол:</label>
        <input type="radio" name="radio" value="1" checked> Мужской
        <input type="radio" name="radio" value="2"> Женский
        <input type="submit">
    </form>
    <?php if (!empty($_GET)): ?>
        <?php
        if (($_GET['radio']) == 1) echo "<p>Вы выбрали мужской пол</p>";
        else echo "<p>Вы выбрали женский пол</p>";
        ?>
    <?php endif; ?>
</body>

</html>