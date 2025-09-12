<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>266</title>
</head>

<body>
    <h1>Селекты в PHP</h1>
    <p>
        С помощью выпадающего списка предложите
        пользователю выбрать страну, в которой он живет.
    </p>
    <form action="" method="POST">

        <select name="country" id="">
            <option>Россия</option>
            <option>США</option>
            <option>Венгрия</option>
        </select>
        <input type="submit">
    </form>
    <?php if (empty($_GET)): ?>
        <?php
        var_dump($_POST['country']);
        ?>
    <?php endif; ?>
</body>

</html>