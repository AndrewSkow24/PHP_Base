<?php

// если переменная не определена, то её значение будет null 

// isset подавит ворнинг 

if (isset($test)) {
    echo $test;
} else {
    echo "variable doesn't exist";
}
