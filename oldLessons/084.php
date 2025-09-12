<?php

// №1⊗ppPmCdCG

// В приведенном ниже коде укажите приоритет операций в явном виде:


$num = 3;

if (($num > 5 and $num < 10) or $num == 20
) {
    echo '+++';
} else {
    echo '---';
}

// №2⊗ppPmCdCG

// В приведенном ниже коде укажите приоритет операций в явном виде:


$num = 3;

if (
    $num > 5 or ($num > 0 and $num < 3)
) {
    echo '+++';
} else {
    echo '---';
}

// №3⊗ppPmCdCG

// В приведенном ниже коде укажите приоритет операций в явном виде:


$num = 3;

if (
    $num == 9 or ($num > 10 and $num < 20) or ($num > 20 and $num < 30)
) {
    echo '+++';
} else {
    echo '---';
}
