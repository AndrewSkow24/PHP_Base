<?php

session_start();

$_SESSION['flash'] = 'флеш-сообщение';
header("Location: 363_2.php");
die();
