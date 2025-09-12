<?php

function isFileOrDir($path)
{
    if (is_file($path)) {
        echo "Путь \"$path\" ведёт к файлу.\n";
    }
    if (is_dir($path)) {
        echo "Путь \"$path\" ведёт к папке.\n";
    }
}

isFileOrDir("test");
isFileOrDir("test/1.txt");
