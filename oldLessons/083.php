<?php

/* Операция and имеет приоритет над or */

$num = 3;

if ($num > 0 and $num < 5 or $num > 10 and $num < 20) {
    echo "условие сработает";
} else {
    echo "не подходящее условие";
}
