<link rel="stylesheet" href="style.css">



include "html.php";

task_heading("№1 ");
p("Найдите количество секунд в сутках.");
$secondsInDay = 24 * 60 * 60;
p("Секунд в сутках: <b>$secondsInDay</b>");

task_heading(task_number: "№2 ");
p(paragraph_text: "Найдите количество секунд в 30 сутках.");
p($secondsInDay * 30);

task_heading("№3 ");
p("Найдите количество секунд в году.");
p($secondsInDay * 365);


task_heading("№4 ");
p(paragraph_text: "Найдите количество минут в сутках.");
p(24 * 60);


task_heading("№5 ");
p("Найдите количество минут в году.");
p(24 * 60 * 365);


task_heading("№6 ");
p("Найдите количество байт в мегабайте.");
// 1 мегабайт = 2 ** 20 байт
p(2 ** 20 . " байт");

task_heading("№7 ");
p("Найдите количество байт в гигабайте.");
p(2 ** 30 . " байт");

task_heading("№8 ");
p("Найдите количество байт в 10 гигабайтах.");
p(2 ** 30 * 10 . " байт");


task_heading("№9 ");
p("Найдите количество байт в терабайте.");
p(2 ** 40 . " байт");


task_heading("№10");
p("Найдите количество килобайт в терабайте.");
p(2 ** 30 . " килобайт");