<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>255</title>
</head>

<body>

    <?php if (empty($_GET)) : ?>
        <form action="" method="GET">
            <input type="text" name="name" placeholder="Имя:">
            <input type="submit">
        </form>
    <?php else: ?>
        <p>Имя: <?= $_GET['name'] ?></p>
    <?php endif; ?>


</body>

</html>