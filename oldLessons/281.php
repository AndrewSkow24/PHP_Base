<?php

if (!isset($_COOKIE['str'])) {
    setcookie('str', 'eee');
    $_COOKIE['str'] = 'eee';
}

echo $_COOKIE['str'];
