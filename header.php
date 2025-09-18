<header>
    <div class="container">
        <div class="header-content">
            <a href="index.php" class="logo">Логотип</a>
            <nav>
                <?php if (empty($_SESSION['auth'])): ?>
                    <a href="register.php">Регистрация</a>
                    <a class="auth-button" href="login.php">Войти</a>
                <?php else: ?>
                    <div class="user-info">
                        <div class="user-avatar">
                            <a href="profile.php?login=<?= $_SESSION['login'] ?>"> <?= $_SESSION['login'][0] ?> </a>
                        </div>
                        <!-- <a href="admin.php">Админ-панель</a> -->

                    </div>

                    <a href="logout.php" class="auth-button">Выйти</a>


                <?php endif; ?>
            </nav>
        </div>
    </div>
</header>