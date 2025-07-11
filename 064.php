 // инкремент и декремент в PHP

 // можно также применять операции инкремента и декремента в PHP

 $arr = [1, 2, 3, 4];

 $arr[0]++; // 2
 ++$arr[1]; // 3
 $arr[2]--; // 2
 --$arr[3]; // 3

 var_dump($arr);


 // task 1
 // Дан следующий код:

 $arr = [
 'a' => 1,
 'b' => 2,
 'c' => 3
 ];

 $arr['a']++; // 2
 $arr['a']++; // 3
 $arr['b']--; // 1
 $arr['c']--; // 2
 $arr['c']--; // 1

 var_dump($arr);// a => 3, b => 1, c => 1

 // Не запуская код, расскажите,
 //каким будет результат функции var_dump.
 /*
 array(3) {
 ["a"]=>
 int(3)
 ["b"]=>
 int(1)
 ["c"]=>
 int(1)
 }
 */