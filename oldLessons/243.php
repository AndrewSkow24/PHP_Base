<?php
$arr =
    [
        'a' => 1,
        'b' => 2,
        'c'
        => 3
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?= $arr['a'] ?>
    </p>
    <p>
        <?= $arr['b'] ?>
    </p>
    <p>
        <?= $arr['c'] ?>
    </p>
</body>

</html>