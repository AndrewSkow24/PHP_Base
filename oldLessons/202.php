<?php

// №1⊗ppPmRgLE
// Исправьте ошибку, допущенную в следующем коде:
// 	echo preg_replace('#a#b#', '!', 'a#b');

echo preg_replace('#a\#b#', '!', 'a#b');
