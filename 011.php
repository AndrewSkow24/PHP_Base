 // Функция var_dump в PHP

 /*
 Команда echo не всегда даёт представление о том, что мы
 выводим. Для отладки ваших программ лучше использовать специальную
 функцию var_dump. Она помимо вывода строки или числа ещё будет
 указывать тип выводимых данных, а также их размер:
 */

 // выведет '12345' и ещё некоторую полезную информацию
 var_dump('12345');

 // string(5) "12345"