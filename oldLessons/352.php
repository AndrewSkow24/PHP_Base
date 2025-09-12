<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>352</title>
</head>

<body>
    <h1>HTTP заголовки</h1>
    <p>
        В PHP можно получить значения заголовков запроса. Они
        содержатся в суперглобальной переменной $_SERVER в виде массива.
        При этом ключ каждого заголовка начинается с HTTP_. Далее идёт имя
        этого заголовка заглавными буквами.
    </p>
    <h2>
        Содержимое заголовка Host
    </h2>
    <p>
        <?= $_SERVER['HTTP_HOST'] ?>
    </p>
    <p>
        Если в имени заголовка есть дефисы, то в ключе PHP они превращаются
        в подчёркивания. Для примера, получим содержимое заголовка Accept-Encoding: <br>
        <b><?= $_SERVER['HTTP_ACCEPT_ENCODING'] ?></b>
    </p>
    <h2>
        Значение заголовка Accept
    </h2>
    <p>
        <?= $_SERVER['HTTP_ACCEPT'] ?>
    </p>
    <h2>Accept-Language</h2>
    <p>
        <?= $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?>
    </p>
    <h2>Содержимое переменной $_SERVER</h2>
    <ol>
        <?php foreach ($_SERVER as $key => $value): ?>
            <li>
                <?= $key ?> --- <?= $value ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>