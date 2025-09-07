<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>267</title>
</head>

<body>
    <h1>Атрибут value в селектах</h1>
    <form action="" method="POST">
        <select name="language" id="" value="<?= isset($_POST['language']) ? $_POST['language'] : ""  ?>">
            <option value="1">Английский</option>
            <option value="2">Русский</option>
            <option value="3">Немецкий</option>
        </select>
        <input type="submit">
        <?php if (empty($_GET['language'])): ?>
            <?= $_POST['language'] ?>
        <?php endif; ?>
    </form>
</body>

</html>