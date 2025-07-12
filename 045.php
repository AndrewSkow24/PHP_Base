 include 'html.php';

 h1("Обращение к цифрам числа на PHP");

 /* Попытка получить символ числа приведёт к ошибке */

 $num = 12345;
 // Warning: Trying to access array offset on int in ..
 // echo $num[0];

 // для решения проблемы можно преобразовать наше число к строке

 $str = (string) $num;
 echo $str[0];

 task_heading(1);
 p("Дано число 12345.
 Найдите сумму цифр этого числа.");
 $num = 12345;
 $str = (string) $num;
 $sum = 0;
 for ($i = 0; $i < strlen($str); $i++) {
     $sum +=$str[$i];
     }
     echo "Ответ: <b>$sum</b>" ;

     task_heading(2);
     p("Дано число 12345. Найдите произведение цифр этого числа.");
     $product=1;
     for ($i=0; $i < strlen($str); $i++) {
     $product *=$str[$i];
     }
     echo "Ответ: <b>$product</b>" ;

     task_heading(3);
     p("Дано число 12345.
     Переставьте цифры этого числа в обратном порядке.");
     $reverseNumber="" ;

     for ($i=strlen($str) - 1; $i>= 0; $i--) {
     $reverseNumber .= $str[$i];
     }
     echo "Ответ: <b>$reverseNumber</b>";