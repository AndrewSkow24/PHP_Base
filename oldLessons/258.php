<?php
$now = new DateTime();
$currentYear = $now->format("Y");
$currentMonth = $now->format("m");
$currentDay = $now->format("d");

$newYearDate = new DateTime(date('Y') . "-12-31");

echo $currentDay;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>258</title>
</head>

<body>
    <h1>
        Сокращённый код для сохранения значений по умолчанию в PHP.
    </h1>
    <p>
        С помощью трех инпутов спросите у пользователя год,
        месяц и день. После отправки формы выведите на экран,
        сколько дней осталось от введенной даты до Нового Года.
        По заходу на страницу сделайте так,
        чтобы в инпутах стояла текущая дата.
    </p>
    <form action="" method="POST">
        <label for="">Год: </label>
        <input type="text" name="year"
            value="<?= $_POST['name'] ?? $currentYear ?>"> <br>
        <label for="">Месяц: </label>
        <input type="text" name="month" value="<?= $_POST['month'] ?? $currentMonth ?>"> <br>
        <label for="">День: </label>
        <input type="text" name="day" value="<?= $_POST['day'] ?? $currentDay ?>"> <br>
        <input type="submit">
    </form>
    <?php if (!empty($_POST)): ?>
        <p>
            Ближайший новый год: <?= $newYearDate->format("Y-m-d"); ?>
        </p>
        <?php
        $userDate = new DateTime(date("$_POST[year]-$_POST[month]-$_POST[day]"));
        $interval = $userDate->diff($newYearDate);

        ?>
        <p>
            Введённая вами дата: <?= $userDate->format("Y-m-d"); ?> <br>
            До нового года осталось: <?= $interval->days ?>
        </p>
    <?php endif; ?>
</body>

</html>