<?php
$show = 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>246</title>
</head>

<body>

    <?php if ($show === 1): ?>
        <div>
            <p>text1</p>
            <p>text1</p>
            <p>text1</p>
        </div>
    <?php elseif ($show === 2): ?>
        <div>
            <p>text2</p>
            <p>text2</p>
            <p>text2</p>
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