<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>256</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="city" placeholder="Город:"
            value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>">
        <input type="text" name="country" placeholder="Страна:"
            value="<?php if (isset($_POST['country'])) echo $_POST['country']; ?>">
        <input type="submit">
    </form>
    <?php if (!empty($_POST)): ?>
        <p>Город: <b><?= $_POST['city'] ?></b></p>
        <p>Страна: <b><?= $_POST['country'] ?></b></p>
    <?php endif ?>
</body>

</html>