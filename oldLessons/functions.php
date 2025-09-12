<?php

require_once "html.php";

function task($number)
{
    echo "\nTask $number\n";
}

function newString()
{
    echo "\n";
}

function p($paragraph_text)
{
    echo "<p>$paragraph_text</p>";
}

function printAnswerRequest($query)
{
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя  пользователя 
    $pass = 'root';          // пароль
    $name = 'mydb';      // имя базы  данных 

    $link = mysqli_connect(
        $host,
        $user,
        $pass,
        $name
    );

    $res = mysqli_query($link, $query);
    // пишем данные в массив
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    foreach ($data as $user) {
        // print_r($user);
        echo "<ul>";
        foreach ($user as $key => $value) {
            echo "<li>$key --- $value</li>";
        }
        echo "</ul>";
    }
}

function printTableAnswer($query)
{
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя  пользователя 
    $pass = 'root';          // пароль
    $name = 'mydb';      // имя базы  данных 

    $link = mysqli_connect(
        $host,
        $user,
        $pass,
        $name
    );

    $res = mysqli_query($link, $query);
    // пишем данные в массив
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    echo "<table>";
    echo "<tr>
    <th>id</th>
        <th>name</th>
    <th>age</th>
    <th>salary</th>

    </tr>";

    foreach ($data as $user) {
        // print_r($user);
        echo "<ul>";
        echo "<tr>";
        echo "<td>$user[id]</td>";
        echo "<td>$user[name]</td>";
        echo "<td>$user[age]</td>";
        echo "<td>$user[salary]</td>";
        echo "</tr>";
        echo "</ul>";
    }

    echo "</table>";
}
