 include 'html.php';

 h1("Пробелы при сложении строк в PHP");

 p("Пусть две строки хранятся в переменных,
 а при их сложении хотим вставить между ними пробел.
 Это делается так:");

 $str1 = 'abc';
 $str2 = 'def';
 echo $str1 . ' ' . $str2;

 p("Пусть переменная только одна:");

 $str = 'abc';
 echo $str1 . ' ' . 'def';

 p("В таком случае нет смысла выделять пробел как отдельную
 строку - вставим его как часть второго слагаемого:");
 echo $str1 . ' def';

 task_heading(1);
 p("Создайте переменную с текстом 'hello'
 и переменную с текстом 'world'.
 С помощью этих переменных и операции сложения строк выведите
 на экран строку 'hello world'.");

 $str1 = 'hello';
 $str2 = 'world';
 echo $str1 . ' ' . $str2;