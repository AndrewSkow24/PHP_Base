<?php

/* 
Запишите в куку момент времени захода пользователя на страницу. 
При обновлении страницы выведите на экран, 
сколько времени прошло с момента первого захода на страницу.
*/

if (!isset($_COOKIE['firstTime'])) {
    // первый заход на страницу 
    $firstTime = time();
    setcookie('firstTime', $firstTime);
    $_COOKIE['firstTime'] = $firstTime;
} else {
    $differenceTime = time() - $_COOKIE['firstTime'];
    echo "Заходил 1й раз <b>$differenceTime</b> секунд назад";
}
