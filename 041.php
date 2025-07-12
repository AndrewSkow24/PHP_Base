 include 'html.php';

 // можно также преобразовать число к строке

 $test = (string) 123;
 var_dump($test);
 br();

 // аналогичным образом будет работать преобразование дробного числа
 $test = (string) 1.2;
 var_dump($test);
 br();

 task_heading(1);
 p("Преобразуйте следующее число в строку:");

 $test = 12345;
 $test = (string) $test;
 var_dump($test);

 task_heading(2);
 p("Преобразуйте следующее число в строку:");
 $test = 12.345;
 $test = (string) $test;
 var_dump($test);