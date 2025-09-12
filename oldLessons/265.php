<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>265</title>
</head>

<body>
    <h1>Сохранение выбранного значения в радиокнопках</h1>
    <p>
        С помощью переключателей попросите пользователя
        выбрать его язык. Сделайте так, чтобы выбор не
        пропадал после отправки формы.
    </p>
    <label for="">Выберите язык:</label>
    <form action="" method="GET">
        <input type="radio" name="radio" value="1"
            <?php
            if (!empty($_GET['radio']) and $_GET['radio'] === '1') echo 'checked'; ?>>
        <label for="">Русский</label> <br>
        <input type="radio" name="radio" value="2"
            <?php
            if (!empty($_GET['radio']) and $_GET['radio'] === '2') echo 'checked'; ?>>
        <label for="">Английский</label> <br>
        <input type="radio" name="radio" value="3"
            <?php
            if (!empty($_GET['radio']) and $_GET['radio'] === '3') echo 'checked'; ?>>
        <label for="">Немецкий</label> <br>
        <input type="submit">
    </form>
    <?php
    if (!empty($_GET)) {
        echo "<h3>Вы выбрали:</h3>";
        if ($_GET['radio'] == 1) echo "<p>Русский</p>";
        if ($_GET['radio'] == 2) echo "<p>Английский</p>";
        if ($_GET['radio'] == 3) echo "<p>Немецкий</p>";
    }
    ?>
</body>

</html>