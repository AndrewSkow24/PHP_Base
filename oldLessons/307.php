<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>307</title>
</head>

<body>
    <?php
    echo "smth";
    $res = file_get_contents('307_function.php');
    ?>
    <?php
    ob_start(); // включение буферизации вывода
    include '307_function.php'; // подключение файла на исполнение
    $res = ob_get_clean(); // получение содержимого буфера и его очистка
    /* 
    просто include выведет файл на экран, но не выполнит код 
    буферизация позволяет перехватить весь вывод и сохранить его в переменную 
    */
    echo $res;
    ?>

    <h2>Ещё одна вставка</h2>
    <?= $res ?>
</body>

</html>