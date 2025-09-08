<?php

// №1⊗ppPmFSDR
echo "<h2>Task 1</h2>";
// Пусть в корне вашего сайта лежит папка dir, 
// а в ней какие-то текстовые файлы. 
// Выведите на экран столбец имен этих файлов.
$files = scandir("trash");

foreach ($files as $file) {
    echo "<li>$file</li>";
}

// №2⊗ppPmFSDR
echo "<h2>Task 2</h2>";
// Пусть в корне вашего сайта лежит папка dir, 
//а в ней какие-то текстовые файлы.
// Переберите эти файлы циклом и выведите их тексты в браузер.

$files = array_diff(scandir("test"), ['..', '.']);

foreach ($files as $file) {
    echo $file;
    $fileContent = file_get_contents("test/$file");
    echo "<li>$fileContent</li>";
}


// №3⊗ppPmFSDR

// Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак.
foreach ($files as $file) {
    $fileContent = file_get_contents("test/$file");
    file_put_contents("test/$file", $fileContent . "!!!");
    echo "Новое содержимое файла: " . file_get_contents("test/$file") . "<br>";
}
