<?php

session_start();

$_SESSION['auth'] = null;
$_SESSION['login'] = "";

header("Location: index.php");
