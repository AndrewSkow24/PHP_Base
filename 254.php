<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>254</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="patronymic" placeholder="patronymic">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)) {
        echo "<p>$_POST[name]</p>";
        echo "<p>$_POST[surname]</p>";
        echo "<p>$_POST[patronymic]</p>";
    }
    ?>
</body>

</html>