<?php

require_once "connectDB.php";

$login = $_GET['login'];

echo $login;

$res = mysqli_query($link, "SELECT * from users where login='$login'");

$userData = mysqli_fetch_assoc($res);

print_r($userData);
