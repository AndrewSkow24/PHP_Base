<?php
$show = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($show): ?>
        <div>
            <p>text+</p>
            <p>text+</p>
            <p>text+</p>
        </div>
    <?php else: ?>
        <div>
            <p>text-</p>
            <p>text-</p>
            <p>text-</p>
        </div>
    <?php endif; ?>

</body>

</html>