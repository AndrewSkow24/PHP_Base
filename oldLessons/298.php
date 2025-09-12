<?php

include "functions.php";

// №1⊗ppPmFSFOECh
task(1);
// Проверьте, лежит ли в корне вашего сайта файл file.txt.
if (file_exists('file.txt')) {
    echo "файл существует";
} else {
    echo "Искомый файл отсутствует!";
    file_put_contents("file.txt", "file_content");
}


// №2⊗ppPmFSFOECh
if (file_exists('file.txt')) {
    echo "файл существует";
} else {
    echo "Искомый файл отсутствует!";
}
// Проверьте, лежит ли в корне вашего сайта файл file.txt. Если нет - создайте его и запишите в него текст '!'.

// №3⊗ppPmFSFOECh
task(3);
// Проверьте, лежит ли в корне вашего сайта файл message.txt.
// Если такой файл есть - выведите текст этого файла на экран.
if (file_exists('message.txt')) {
    echo "файл существует";
    echo file_get_contents('message');
} else {
    echo "Искомый файл отсутствует!";
}
