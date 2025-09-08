<?php


// №1⊗ppPmFSFMv
// Пусть в корне вашего сайта лежит файл file.txt. Пусть также в корне вашего сайта лежит папка dir.
// Переместите файл в эту папку.
file_put_contents("file.txt", "file_from 294_1");
rename("file.txt", "dir/file.txt");



// №2⊗ppPmFSFMv

// Пусть в корне вашего сайта лежит папка dir1, 
// а в ней файл file.txt. 
// Пусть также в корне вашего сайта лежит папка dir2. 
// Переместите файл в эту папку.

echo file_get_contents('dir1/file294_2.txt');

rename('dir1/file294_2.txt', "/dir2/file294_2.txt");
