<meta charset="utf-8">


<?php

// http://localhost:8888/MAMP/?language=English

$host = "localhost";
$user = "root";
$pass = "root";
$name = 'mydb'; // имя базы данных 

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");
// 316 

$res = mysqli_query($link, 'SELECT * FROM users') or die(mysqli_error($link));

// 318 
var_dump(value: $res);

// 320 