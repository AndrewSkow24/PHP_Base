 include 'html.php';

 h1("Давайте с помощью тега a выведем на экран ссылку:");

 echo '<a href="index.php">ссылка</a>';

 p("Пусть теперь адрес и текст ссылки хранятся
 в отдельных переменных");

 $href = 'index.php';
 $text = 'ссылка';

 echo "<a href=\"$href\">$text</a>";

 task_heading(1);

 p("С помощью тега &lt;img&gt; выведите на
 экран какую-нибудь картинку.");

 $img_link = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/800px-Webysther_20160423_-_Elephpant.svg.png';
 echo "<img src=\"$img_link\" width=500px;>";

 task_heading(2);

 p("С помощью тега &lt;input&gt;
 выведите на экран инпут с каким-нибудь
 текстом.");

 echo "<input value='something_text'>";

 task_heading(3);
 p("С помощью тега &lt;textarea&gt;
 выведите на экран многострочное
 поле ввода с каким-нибудь текстом.");

 echo '<textarea>=something_text</textarea>';