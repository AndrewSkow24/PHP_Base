 include 'html.php';
 include 'initSet.php';

 h1("Последний символ строки PHP");

 /* Давайте выведем последний символ строки. При этом сделаем так,
 чтобы наш скрипт сам определял номер последнего символа, независимо
 от длины строки.

 Пусть у нас есть строка: */

 $str = 'abcde';

 /* Как вы видите, количество символов в этой строке равно 5.
 Если немного подумать, то становится очевидным, что номер последнего
 символа этой строки будет на 1 меньше её длины, так как нумерация
 символов начинается с нуля.

 Получается, что зная длину строки, мы можем отнять от неё 1 и
 получить номер последнего символа, а затем по этому номеру можно
 получить и сам последний символ.

 Как вы уже знаете длину строки можно найти с помощью функции
 strlen / mb_strlen. Исходя из этого найдём номер последнего символа: */

 $last = strlen($str) - 1; // номер последнего символа

 // используем найденный номер для вывода символа на экран:

 echo "Последний символ строки: $str[$last]";
 br();

 // промежуточную переменную $last можно не вводить
 echo "То же самое без лишней переменной: " . $str[strlen($str) - 1];
 br();

 task_heading(1);
 p("Дана строка.
 Выведите на экран ее последний символ.");

 $myTaskString = "My string";
 echo "Исходная строка: $myTaskString";
 br();
 echo "Последний символ: " .
 $myTaskString[strlen($myTaskString) - 1];


 task_heading(2);
 p("Дана строка.
 Выведите на экран ее предпоследний символ.");

 $myTaskString = "My string";
 echo "Исходная строка: $myTaskString";
 br();
 echo "Предпоследний символ: " .
 $myTaskString[strlen($myTaskString) - 2];

 task_heading(2);
 p("Дана строка.
 Выведите на экран ее предпредпоследний символ.");

 $myTaskString = 'Only english string';
 echo "Исходная строка: $myTaskString";
 br();
 echo "Предпредпоследний символ: " .
 $myTaskString[mb_strlen($myTaskString) - 3];

 // Строки с кириллицей такую операцию не поддерживают