<?php

/* 
В PHP можно определить HTTP-метод, которым был осуществлен запрос.
Для этого нужно прочитать следующее
*/

$method = $_SERVER['REQUEST_METHOD'];
var_dump($method);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" value="John">
        <input type="submit">
    </form>
</body>

</html>