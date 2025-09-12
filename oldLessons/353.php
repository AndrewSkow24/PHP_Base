<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>353</title>
</head>

<body>
    <h1>Массив заголовком HTTP-запроса</h1>
    <?php
    $arr = getallheaders();
    ?>
    <ol>
        <?php foreach ($arr as $key => $value): ?>
            <li><?= $key ?> --- <?= $value ?> </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>