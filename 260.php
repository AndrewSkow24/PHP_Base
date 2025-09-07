<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>260</title>
</head>

<body>
    <h1>Сохранение значения textarea после отправки</h1>
    <p>
        Пусть в textarea вводится русский текст.
        После отправки формы выведите на экран транслит
        этого текста.
        Сделайте так, чтобы содержимое формы
        сохранялось после отправки.
    </p>
    <form action="" method="POST">
        <textarea name="russianText" id="ta"><?= $_POST['russianText'] ?? 'Напишите ваш текст:'  ?></textarea>
        <input type="submit">
    </form>


    <?php if (isset($_POST['russianText'])): ?>
        <h2>Введённый вами текст</h2>
        <p><?= $_POST['russianText'] ?></p>

        <?php
        $replacements = [
            // Строчные буквы
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'yo',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'y',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'kh',
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shch',
            'ъ' => '',
            'ы' => 'y',
            'ь' => '',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',

            // Заглавные буквы
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'Yo',
            'Ж' => 'Zh',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'Y',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'Kh',
            'Ц' => 'Ts',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shch',
            'Ъ' => '',
            'Ы' => 'Y',
            'Ь' => '',
            'Э' => 'E',
            'Ю' => 'Yu',
            'Я' => 'Ya',
        ];

        $translit_result = strtr(
            $_POST['russianText'],
            $replacements
        )

        ?>

        <h3>Транслитный текст</h3>
        <p>
            <?= $translit_result ?>
        </p>
    <?php endif; ?>


    <script>
        const myTextArea = document.getElementById("ta");
        myTextArea.addEventListener("focus", (event) => {
            event.target.value = "";
        })
    </script>
</body>

</html>