<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>250</title>
</head>

<body>
    <p>
        На странице index.php сделайте форму. Отправьте ее
        на страницу result.php. Проверьте оба метода отправки формы.
    </p>
</body>

<h2>Форма для отправки GET-методом</h2>
<form action="/250_result.php" method="GET">
    <input type="text" name="test1">
    <input type="text" name="test2">
    <input type="submit">
</form>
<!-- http://localhost:8888/250_result.php?test1=12&test2=12 -->
<h2>Форма для отправки POST-методом</h2>
<form action="/250_result.php" method="POST">
    <input type="text" name="test1">
    <input type="text" name="test2">
    <input type="submit">
</form>
<!-- http://localhost:8888/250_result.php -->

</html>