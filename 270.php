<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>270</title>
</head>

<body>
    <h1>GET-запросы с помощью ссылок</h1>
    <h2>Task 1</h2>
    <p>
        Сделайте три ссылки. Пусть первая передает число 1, вторая - число 2, третья - число 3. Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.
    </p>
    <a href="?num=1">1</a>
    <a href="?num=2">2</a>
    <a href="?num=3">3</a>

    <?php

    if (isset($_GET['num'])) {
        echo "<p><b>$_GET[num]</b></p>";
    }
    ?>
    <h2>Task 2</h2>
    <p>
        Сформируйте в цикле 10 ссылок.
        Пусть каждая ссылка передает свое число.
        Сделайте так, чтобы по нажатию на ссылку на
        экран выводилось ее число.
    </p>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<a href=\"?num=$i\">ссылка $i</a> <br>";
    }
    if (isset($_GET['num'])) {
        echo "<p><b>$_GET[num]</b></p>";
    }

    ?>
    <h2>Task 3</h2>
    <p></p>
    Дан массив:

    $arr = ['a', 'b', 'c', 'd', 'e'];
    Сделайте так, чтобы с помощью GET запроса можно было вывести любой элемент этого массива. Для этого с помощью цикла foreach сделайте ссылку для каждого элемента массива.
    </p>

    <?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $i = 0;
    foreach ($arr as $el) {
        echo "<a href=\"?el=$i\">element $i</a> <br>";
        $i++;
    }
    if (isset($_GET['el'])) {
        echo "<p><b>" .
            $arr[$_GET['el']] .
            "</b></p>";
    }
    ?>
</body>

</html>