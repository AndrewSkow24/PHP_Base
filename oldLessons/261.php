<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>261</title>
</head>

<body>
    <h1>Чекбокс в PHP</h1>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Введите имя:" value="<?= $_POST['name'] ?? "" ?>">
        <input type="checkbox" name="flag">
        <input type="submit">
    </form>
    <?php if (!empty($_POST)): ?>
        <?= isset($_POST['flag']) ? "<p>Привет, $_POST[name]!</p>" : "<p>Пока, $_POST[name]!</p>" ?>
    <?php endif; ?>
</body>

</html>