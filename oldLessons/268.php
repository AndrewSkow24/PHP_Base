<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>268</title>
</head>

<body>
    <h1>Атрибут value в селектах</h1>
    <form action="" method="POST">
        <select name="language">">
            <option value="1"
                <?php if (!empty($_POST['language']) and $_POST['language'] == 1) echo "selected"; ?>>Английский</option>
            <option value="2"
                <?php if (!empty($_POST['language']) and $_POST['language'] == 2) echo "selected"; ?>>Русский</option>
            <option value="3"
                <?php if (!empty($_POST['language']) and $_POST['language'] == 3) echo "selected"; ?>>Немецкий</option>
        </select>
        <input type="submit">
        <?php if (($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))): ?>
            <?php var_dump($_POST['language']) ?>
        <?php endif; ?>
    </form>
</body>

</html>