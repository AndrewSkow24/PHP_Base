<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>305</title>
</head>

<body>
    <h1>Содержимое папки в PHP </h1>
    <h2>Task 1</h2>
    <p>
        Дана папка. Выведите на экран столбец имен подпапок
        из этой папки.
    </p>
    <?php
    $files = array_diff(scandir('test'), ['.', '..']);
    echo "<ul>";
    foreach ($files as $file) {
        if (is_dir("test/$file")) {
            echo "<li>$file</li>";
        }
    }
    echo "</ul>";

    ?>
    <h2>Task 2</h2>
    <p>
        Дана папка. Выведите на экран столбец имен файлов из этой папки.
    </p>
    <?php
    echo "<ul>";
    foreach ($files as $file) {
        if (!is_dir("test/$file")) {
            echo "<li>$file</li>";
        }
    }
    echo "</ul>";
    ?>

    <h2>Task 3</h2>
    <p>
        Дана папка. Запишите в конец каждого файла этой папки текущий момент времени.
    </p>
    <?php
    date_default_timezone_set('Europe/Moscow');


    foreach ($files as $file) {
        if (!is_dir("test/$file")) {
            $currentTime = date_create("now");
            $formattedTime =  date_format($currentTime, "H:i:s");
            $fileContent = file_get_contents("test/$file");
            file_put_contents("test/$file", $fileContent . "$formattedTime");
        }
    }
    ?>
</body>

</html>