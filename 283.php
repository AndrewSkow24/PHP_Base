<?php

// setcookie живут только до закрытия браузера 
// продлить время жизни можно с помощью третьего параметра,
// который принимает момент времени в виде timestamp
// как только этот момент наступит куки автоматически 
// будет удалена браузером 

setcookie('cookieMonth', "month", time() + 3600 * 24 * 30);
setcookie('cookieYear', 'year', time() + 3600 * 24 * 30 * 12);
setcookie('cookieYear', 'year', time() + 3600 * 24 * 30 * 12 * 10);

setcookie('cookieMonth', '', time());
unset($_COOKIE['cookieYear']);
print_r($_COOKIE);
