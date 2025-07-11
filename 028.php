 include "html.php";

 h1("Сложение строк в PHP");
 p("Для сложения строк (конкатенации) используется оператор точка");

 $str = 'abc' . 'def';
 echo $str;

 p("Строки также могут хранится в переменных:");
 $str1 = "abc";
 $str2 = "def";
 echo $str1 . $str2; // 'abcdef'

 p("Можно складывать переменные и строки");
 echo $str1 . '!!!' . $str2;

 task_heading(1);
 p("Создайте переменную $str и присвойте ей строку 'hello'.
 Выведите значение этой переменной на экран.");

 $str = 'hello';
 echo $str;

 task_heading(2);
 p("Создайте переменную с текстом 'abc' и переменную с текстом 'def'.
 С помощью этих переменных и операции сложения строк выведите
 на экран строку 'abcdef'.");

 echo $str1 . $str2;