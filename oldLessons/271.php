<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>271</title>
</head>

<body>
    <h1>Практика на формы в PHP</h1>
    <h2>Task 1</h2>
    <p>
        Напишите скрипт, который будет преобразовывать температуру из градусов Цельсия в градусы Фарингейта. Для этого сделайте инпут и кнопку
    </p>
    <h2>Solution 1</h2>
    <form action="" method="POST">
        <label for="celsius">Градусы °C</label>
        <input type="text" name="celsius" id="celsius"
            value="<?php
                    if (isset($_POST['celsius'])) echo ($_POST['celsius']);
                    else echo 0;

                    ?>">
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['celsius'])) {
        $fahrenheit = 32 + $_POST['celsius'] * 1.8;
        echo "<p>Температура $fahrenheit °F</p>";
    }

    ?>
    <h2>Task 2</h2>
    <p>
        Напишите скрипт, который будет считать факториал числа.
        Само число вводится в инпут и после нажатия на кнопку
        пользователь должен увидеть результат.
    </p>
    <h2>Solution 2</h2>
    <form action="" method="POST">
        <form action="" method="POST">
            <input type="text" name="number"
                value="<?php
                        if (isset($_POST['number'])) {
                            echo $_POST['number'];
                        } else echo 0;
                        ?>">
            <input type="submit">
        </form>
        <?php if (isset($_POST['number'])): ?>
            <?php
            $factorial = 1;
            for ($i = 1; $i <= $_POST['number']; $i++) {
                $factorial *= $i;
            }
            ?>
            <p>
                <?= "$_POST[number]!= $factorial" ?>
            </p>
        <?php endif; ?>

    </form>


    <h2>Task 3</h2>
    <p>
        Дан инпут и кнопка. В инпут вводится число. По нажатию на кнопку выведите список делителей этого числа.
    </p>
    <form action="" method="POST">
        <input type="text" name="number3"
            value="<?php
                    if (isset($_POST['number3'])) {
                        echo $_POST['number3'];
                    } else echo 0;
                    ?>">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['number3'])) {
        $arrDivs = [];

        for ($i = 1; $i <= $_POST['number3']; $i++) {
            if ($_POST['number3'] % $i === 0) {
                array_push($arrDivs, $i);
            }
        }

        echo "<p>Список делителей: </p>";
        // print_r($arrDivs);
        echo "<ul>";
        foreach ($arrDivs as $el) {
            echo "<li>$el</li>";
        }
        echo "</ul>";
    }

    ?>
    <h2>Task 4</h2>
    <p>
        Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на кнопку выведите список общих делителей этих двух чисел.
    </p>
    <form action="" method="POST">
        <label for="">Число 1: </label>
        <input
            type="text"
            name="input4_1"
            value=<?= isset($_POST['input4_1']) ?? '0' ?>>
        <br>
        <label for="">Число 2: </label>
        <input
            type="text"
            name="input4_2"
            value=<?= isset($_POST['input4_2']) ?? '0' ?>>
        <br>
        <input type="submit">
    </form>


    <?php
    if (isset($_POST['input4_1']) and isset($_POST['input4_2'])) {
        $arrDivs1 = [];
        $arrDivs2 = [];

        for ($i = 1; $i <= $_POST['input4_1']; $i++) {
            if ($_POST['input4_1'] % $i === 0) {
                array_push($arrDivs1, $i);
            }
        }
        for ($i = 1; $i <= $_POST['input4_2']; $i++) {
            if ($_POST['input4_2'] % $i === 0) {
                array_push($arrDivs2, $i);
            }
        }

        $intersectArray = array_intersect($arrDivs1, $arrDivs2);

        echo "<p>Общие делители:</p>";
        foreach ($intersectArray as $el) {
            echo "<li>$el</li>";
        }
    }
    ?>
    <h2>Task 5</h2>
    <p>
        Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута, в которые будут вводиться коэффициенты уравнения.
    </p>
    <form action="" method="POST">
        <input type="text" name="a" value="<?= $_POST['a'] ?? '0' ?>"> <span>x^2 + </span>
        <input type="text" name="b" value="<?= $_POST['b'] ?? '0' ?>"> <span>x + </span>
        <input type="text" name="c" value="<?= $_POST['c'] ?? '0' ?>"> <span> =0 </span>
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['a']) + isset($_POST['b']) + isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b ** 2 - 4 * $a * $c;

        if ($discriminant < 0) {
            echo "<p>Нет корней !</p>";
        } else {
            $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminant)) / (2 * $a);

            echo "<li>$x1</li>";
            echo "<li>$x2</li>";
        }
    }
    ?>
    <h2>Task 6</h2>
    <p>
        Даны 3 инпута. В них вводятся числа.
        Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных.
    </p>
    <form action="" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="text" name="num3">
        <input type="submit">
        <?php

        if (
            isset($_POST['num1'])
            and
            isset($_POST['num2'])
            and
            isset($_POST['num3'])
        ) {
            echo "<p>Результат: </p>";
            $arr = [];
            array_push($arr, $_POST['num1'], $_POST['num2'], $_POST['num3']);
            sort($arr);
            // print_r($arr);

            if ($arr[2] ** 2 === $arr[0] ** 2 + $arr[1] ** 2) {
                echo "<p>Введённые числа - тройка Пифагора!</p>";
            } else {
                echo "<p>Введённые числа не являются тройкой Пифагора!</p>";
            }
        }
        ?>
    </form>
    <h2>Task 7</h2>
    <p>
        Дан инпут и кнопка. В этот инпут вводится дата рождения
        в формате '01.12.1990'.
        По нажатию на кнопку выведите на экран сколько
        дней осталось до дня рождения пользователя.
    </p>
    <form action="" method="POST">
        <input
            type="text"
            name="birthDay"
            value="<?= $_POST['birthDay'] ?? '' ?>"
            placeholder="Дата в формате 20.12.1995">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['birthDay'])) {
        $userBirthday = $_POST['birthDay'];
        echo $userBirthday;

        if (preg_match("#(\d{2}).(\d{2}).(\d{4})#", $userBirthday, $arrayDate)) {
            echo "Корректный ввод";
            var_dump($arrayDate);
        } else echo "Некорректный ввод";

        $usersDate = date_create("$arrayDate[3]-$arrayDate[2]-$arrayDate[1]");
        echo date_format($usersDate, "Y-m-d");
        $currentDate = date_create("now");

        $currentDay = date_format($currentDate, "d");
        $currentMonth = date_format($currentDate, "m");
        $currentYear = date_format($currentDate, "Y");

        $birthDayDay = date_format($usersDate, "d");
        $birthDayMonth = date_format($usersDate, "m");
        $birthDayYear = date_format($usersDate, "Y");



        $currentYearBirthday = date_create("$currentYear-$birthDayMonth-$birthDayDay");
        echo "Дата др в этом году:";
        echo date_format($currentYearBirthday, "Y-m-d");

        if ($currentDate < $currentYearBirthday) {
            echo "В ЭТОМ ГОДУ ДР ЕЩЁ НЕ БЫЛО";
            $difference = mktime(0, 0, 0, $birthDayMonth, $birthDayDay, $currentYear) - mktime(0, 0, 0, $currentMonth, $currentDay, $currentYear);
            $differenceInDays = ceil($difference / 24 / 3600) - 1;
            echo "<p>До дня рождения осталось: $differenceInDays\n</p>";
        } else {
            echo "ДР уже был, считаем следующий год";
            $difference = mktime(0, 0, 0, $birthDayMonth, $birthDayDay, $currentYear + 1) - mktime(0, 0, 0, $currentMonth, $currentDay, $currentYear);
            $differenceInDays = ceil($difference / 24 / 3600) - 1;
            echo "<p>До дня рождения осталось: $differenceInDays\n</p>";
        }
    }


    ?>
    <h2>Task 8</h2>
    <p>
        Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку выведите количество слов и количество символов в тексте.
    </p>

    <form action="" method="POST">
        <textarea name="textarea" id=""><?= $_POST['textarea'] ?? "" ?></textarea>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['textarea'])) {
        $textAreaString = $_POST['textarea'];
        echo $textAreaString . "\n";
        $numSymbols = strlen($textAreaString);
        //$numberWords = preg_match_all("#[a-zA-z0-9]+#", $textAreaString);
        $numberWords = str_word_count($textAreaString);
        echo "<p>
        Введено символов: $numSymbols <br>
        Введено слов: $numberWords <br>
        </p>";
    }

    ?>
    <h2>Task 9</h2>
    <p>
        Дан текстареа и кнопка. В текстареа вводится текст.
        По нажатию на кнопку нужно посчитать процентное
        содержание каждого символа в тексте.
    </p>

    <form action="" method="POST">
        <textarea name="textarea2" id=""><?= $_POST['textarea2'] ?? "" ?></textarea>
        <input type="submit">
    </form>

    <?php

    if (isset($_POST['textarea2'])) {
        $textString = $_POST['textarea2'];
        echo $textString;
        $arraySymbols = [];
        for ($i = 0; $i < strlen($textString); $i++) {
            array_push($arraySymbols,  $textString[$i]);
        }
        // удалить дубликаты
        // только уникальные символы
        $uniqSymbols = array_unique($arraySymbols);
        sort($arraySymbols);
        $statisticArr = [];
        // через регулярку mathc_all посчитать сумму

        foreach ($uniqSymbols as $el) {
            $freq =  preg_match_all("#$el#", $textString, $matches);
            $statisticArr[$el] = floor($freq / strlen($textString) * 100);

            // echo "<li>$el --- $freq</li>";
        }
        ksort($statisticArr);
        //print_r($statisticArr);


        echo "<ul>";
        foreach ($statisticArr  as $key => $value) {
            echo "<li>$key --- $value %</li>";
        }
        echo "</ul>";
    }


    ?>

    <h2>Task 10</h2>
    <p>
        Даны 3 селекта и кнопка.
        Первый селект - это дни от 1 до 31,
        второй селект - это месяцы от января до декабря,
        а третий - это годы от 1990 до 2025.
        С помощью этих селектов можно выбрать дату.
        По нажатию на кнопку выведите на экран день недели,
        соответствующий этой дате.
    </p>
    <form action="" method="POST">
        <select name="day">
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
        <?php
        $months =
            [
                1 => "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            ];
        ?>
        <select name="month">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?= $i ?>"><?= $months[$i] ?></option>
            <?php endfor; ?>
        </select>

        <select name="year">
            <?php for ($i = 1990; $i <= 2025; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
        <input type="submit">
        <?php
        if (isset($_POST['day']) and isset($_POST['month']) and isset($_POST['year'])) {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            echo "<p> Ваша дата: $year-$month-$day</p>";

            $date = date_create("$year-$month-$day");
            switch (date_format($date, 'w')) {
                case '0':
                    echo "<p><b>Воскресенье</b></p>";
                    break;
                case '1':
                    echo "<p><b>Понедельник</b></p>";
                    break;
                case '2':
                    echo "<p><b>Вторник</b></p>";
                    break;
                case '3':
                    echo "<p><b>Среда</b></p>";
                    break;
                case '4':
                    echo "<p><b>Четверг</b></p>";
                    break;
                case '5':
                    echo "<p><b>Пятница</b></p>";
                    break;
                case '6':
                    echo "<p><b>Суббота</b></p>";
                    break;
                default:
                    echo "<p>Некорректные данные</p>";
                    break;
            }
        }
        ?>
    </form>

    <h2>Task 11</h2>
    <p>
        Сделайте скрипт-гороскоп.
        Внутри него хранится массив гороскопов на несколько
        дней вперед для каждого знака зодиака.
        По заходу на страницу спросите у пользователя
        дату рождения, определите его знак зодиака и
        выведите предсказание для этого знака зодиака
        на текущий день.
    </p>

    <?php
    // Массив с гороскопами (предсказаниями)
    $horoscopes = [
        // Знак: Овен (21 марта - 19 апреля)
        'aries' => [
            "Сегодня звезды советуют вам проявить инициативу на работе. Неожиданное предложение может привести к успеху!",
            "Завтра - день риска. Будьте осторожны в финансовых вопросах, но не упускайте интересные возможности.",
            "Послезавтра идеальное время для решения старых проблем. Энергия Марса поможет вам завершить начатое."
        ],
        // Знак: Телец (20 апреля - 20 мая)
        'taurus' => [
            "Сегодня сосредоточьтесь на домашних делах. Создание уюта принесет вам душевное спокойствие.",
            "Завтра возможны небольшие финансовые поступления. Не тратьте все сразу, отложите часть на мечту.",
            "Послезавтра вас ждет приятная встреча. Старый друг может предложить выгодное сотрудничество."
        ],
        // Знак: Близнецы (21 мая - 20 июня)
        'gemini' => [
            "Сегодня день общения. Ваша харизма на высоте - используйте это для заключения важных договоренностей.",
            "Завтра будьте внимательны к деталям в документах. Возможны двусмысленные формулировки.",
            "Послезавтра ожидайте хороших новостей. Письмо или звонок изменят ваши планы в лучшую сторону."
        ],
        // Знак: Рак (21 июня - 22 июля)
        'cancer' => [
            "Сегодня прислушайтесь к своей интуиции в личных отношениях. Она подскажет верное решение.",
            "Завтра лучше провести день в спокойной обстановке. Шумные компании могут вызвать раздражение.",
            "Послезавтра наступит время для творчества. Реализуйте давно задуманный проект - вас ждет успех."
        ],
        // Знак: Лев (23 июля - 22 августа)
        'leo' => [
            "Сегодня вы в центре внимания! Не бойтесь брать на себя ответственность - вас ждет признание.",
            "Завтра возможны небольшие конфликты на пустом месте. Проявите великодушие и не поддавайтесь на провокации.",
            "Послезавтра звезды советуют сделать необычную покупку. Она принесет вам радость на долгое время."
        ],
        // Знак: Дева (23 августа - 22 сентября)
        'virgo' => [
            "Сегодня идеальный день для планирования. Составьте список целей на месяц - это принесет свои плоды.",
            "Завтра проявите гибкость в рабочих вопросах. Новые методы могут оказаться эффективнее старых.",
            "Послезавтра уделите время здоровью. Легкая физическая активность улучшит ваше самочувствие."
        ],
        // Знак: Весы (23 сентября - 22 октября)
        'libra' => [
            "Сегодня вас ждет романтическое знакомство или приятный сюрприз от партнера. Откройте сердце для новых чувств!",
            "Завтра возможны трудности в принятии решения. Посоветуйтесь с близким человеком - его мнение будет ценным.",
            "Послезавтра наступит время для заключения договоров и соглашений. Ваша дипломатичность будет оценена по достоинству."
        ],
        // Знак: Скорпион (23 октября - 21 ноября)
        'scorpio' => [
            "Сегодня доверьтесь своей внутренней силе. Вы способны преодолеть любые препятствия на своем пути.",
            "Завтра будьте осторожны с высказываниями. Излишняя прямолинейность может ранить чувства окружающих.",
            "Послезавтра возможна неожиданная прибыль. Инвестируйте в то, что действительно вас интересует."
        ],
        // Знак: Стрелец (22 ноября - 21 декабря)
        'sagittarius' => [
            "Сегодня звезды зовут вас в путешествие! Даже небольшая поездка подарит массу впечатлений.",
            "Завтра день обучения. Освоение нового навыка откроет перед вами интересные перспективы.",
            "Послезавтра вас ждет вдохновляющая встреча. Общение с интересным человеком перерастет в нечто большее."
        ],
        // Знак: Козерог (22 декабря - 19 января)
        'capricorn' => [
            "Сегодня сосредоточьтесь на карьерных целях. Ваша трудоспособность впечатляет - используйте это!",
            "Завтра не спешите принимать важные решения. Дайте себе время обдумать все возможные варианты.",
            "Послезавтра наступит время для общения с семьей. Поддержка близких придаст вам сил."
        ],
        // Знак: Водолей (20 января - 18 февраля)
        'aquarius' => [
            "Сегодня вас посетит гениальная идея. Запишите ее и начните реализовывать - это может изменить вашу жизнь!",
            "Завтра день нестандартных решений. Подойдите творчески к рутинным задачам - и они перестанут быть скучными.",
            "Послезавтра ожидайте интересного предложения от друзей. Необычный проект увлечет вас с головой."
        ],
        // Знак: Рыбы (19 февраля - 20 марта)
        'pisces' => [
            "Сегодня прислушайтесь к своим снам. Подсознание может подсказать ответ на давно мучивший вас вопрос.",
            "Завтра проявите сострадание к окружающим. Ваша помощь будет очень ценной для кого-то из близких.",
            "Послезавтра идеальный день для творчества. Рисуйте, пишите, пойте - ваши таланты найдут признание."
        ]
    ];
    function getZodiacSign($day, $month)
    {
        if (($month == 3 and $day >= 21) or ($month == 4 and $day <= 19)) return 'aries';
        if (($month == 4 and $day >= 20) or ($month == 5 and $day <= 20)) return 'taurus';
        if (($month == 5 and $day >= 21) or ($month == 6 and $day <= 20)) return 'gemini';
        if (($month == 6 and $day >= 21) or ($month == 7 and $day <= 22)) return 'cancer';
        if (($month == 7 and $day >= 23) or ($month == 8 and $day <= 22)) return 'leo';
        if (($month == 8 and $day >= 23) or ($month == 9 and $day <= 22)) return 'virgo';
        if (($month == 9 and $day >= 23) or ($month == 10 and $day <= 22)) return 'libra';
        if (($month == 10 and $day >= 23) or ($month == 11 and $day <= 21)) return 'scorpio';
        if (($month == 11 and $day >= 22) or ($month == 12 and $day <= 21)) return 'sagittarius';
        if (($month == 12 and $day >= 22) or ($month == 1 and $day <= 19)) return 'capricorn';
        if (($month == 1 and $day >= 20) or ($month == 2 and $day <= 18)) return 'aquarius';
        return 'pisces';
    }
    ?>

    <form action="" method="POST">
        <input style="width:300px" type="text" name="dateBirth" placeholder="Введите дату в формате 2025-12-15" value="<?= $_POST['dateBirth'] ?? '' ?>">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['dateBirth'])) {
        $userDate = date_create($_POST['dateBirth']);
        $month = date_format($userDate, 'm');
        $day = date_format($userDate, 'd');

        echo "<p>Месяц: $month</p>";
        echo "<p>День: $day</p>";

        $zodiacSign = getZodiacSign($day, $month);

        echo "<p>Ваш знак зодиака: <b>$zodiacSign</b></p>";
        echo "<h3>Прогноз на сегодня</h3>";
        $text = $horoscopes[$zodiacSign][0];
        echo "<p>$text</p>";
    }
    ?>
</body>

</html>