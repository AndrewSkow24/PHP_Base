<?php
session_start();

if (isset($_SESSION['successAuth'])) {
    // echo $_SESSION['auth'];
    echo "<script>alert('$_SESSION[successAuth]')</script>";
    unset($_SESSION['successAuth']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">Логотип</a>
                <nav>
                    <?php if (empty($_SESSION['auth'])): ?>
                        <a href="register.php">Регистрация</a>
                        <a class="auth-button" href="login.php">Войти</a>
                    <?php else: ?>
                        <div class="user-info">
                            <div class="user-avatar">
                                <?= $_SESSION['login'][0] ?>
                            </div>
                            <!-- <a href="admin.php">Админ-панель</a> -->

                        </div>

                        <a href="logout.php" class="auth-button">Выйти</a>


                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </header>


    <main>
        <div class="container">
            <section class="hero">
                <h1>Главная страница</h1>
                <p>
                    Добро пожаловать на сайт о разработке на PHP.
                </p>
            </section>

            <!-- content box -->
            <section class="content-box">
                <?php if (!empty($_SESSION['auth'])): ?>
                    <h2>Добро пожаловать,
                        <?= $_SESSION['login'] ?> !
                    </h2>
                    <p>
                        Это эксклюзивный контент для
                        авторизированных пользователей.
                        Здесь вы можете найти специальные предложения,
                        персонализированные рекомендации и многое другое.
                    </p>
                <?php else: ?>
                    <h2>Доступ к контенту запрещён</h2>

                    <p>
                        Пожалуйста, авторизируйтесь для просмотра эксклюзивного
                        контента. Если у вас еще нет аккаунта, вы можете
                        зарегистрироваться прямо сейчас
                    </p>
                <?php endif; ?>

            </section>
        </div>
    </main>


    <footer>
        <div class="container">
            <p> <?= time() ?>© Все права защищены. </p>
        </div>
    </footer>
</body>

</html>