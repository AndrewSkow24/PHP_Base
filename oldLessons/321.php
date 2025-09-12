<?php

require_once "connectDB.php";

$query = 'Select * From users';
$res = mysqli_query($link, $query);
$row1 = mysqli_fetch_assoc($res);
print_r($row1);
$row2 = mysqli_fetch_assoc($res);
print_r($row2);
$row3 = mysqli_fetch_assoc($res);
print_r($row3);
