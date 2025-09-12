<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>259</title>
</head>

<body>
    <h1>Элемент textarea</h1>
    <p>
        Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран.
    </p>
    <?php if (empty($_POST)): ?>
        <form action="" method="POST">
            <textarea name="myTextArea"></textarea>
            <input type="submit">
        </form>
    <?php else: ?>
        <p>Ваш отзыв: <i><?= $_POST['myTextArea'] ?></i>
        <p>
        <?php endif; ?>
</body>

</html>