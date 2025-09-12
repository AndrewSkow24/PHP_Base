<?php

// группирующие скобки 

$str = 'ab abab abab abababab abea';

$res = preg_replace("#(ab)+#", "!", "$str");
echo $res;
