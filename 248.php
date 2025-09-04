<?php
$arr = ['user1', 'user2', 'user3'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>248</title>
</head>

<body>
    <?php foreach ($arr as $elem): ?>
        <div>
            <h2><?= $elem ?></h2>
            <p>text</p>
        </div>
    <?php endforeach; ?>
</body>

</html>