<!DOCTYPE html>
<html lang="en">

<?php
$currentYear = date_format(date_create("now"), "Y");

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>257</title>
</head>

<body>
    <h2>Данные в форме по умолчанию </h2>
    <p>
        С помощью формы спросите у пользователя год. После отправки определите, этот год високосный или нет. Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год.
    </p>
    <form action="" method="POST">
        <label for="year">Введите год:</label>
        <input type="text" id="year" name="year"
            value="<?php if (empty($_POST))
                        echo trim($currentYear);
                    else echo $_POST['year']; ?>">
        <input type="submit">
    </form>
    <?php if (isset($_POST['year'])) : ?>
        <p>
            <?= $_POST['year'] ?> -
            <b>
                <?php
                if ($_POST['year'] % 4 == 0) echo "Високосный год.";
                else echo "Невисокосный год."
                ?> </b>
        </p>
    <?php endif; ?>

</body>

</html>