<?php

require_once 'connectDB.php';

session_start();

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
        WHERE login='$login' AND password='$password'";
    $res = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($res);

    if (!empty($user)) {
        header('Location: index.php');
        $_SESSION['successAuth'] = "Авторизация прошла успешно!";
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;
    } else {
        $error = "Неверный логин или пароль";
    }
}

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
</head>

<body>

    <div class="container">
        <div class="auth-card">
            <h1>Авторизация</h1>
            <p>Войти в аккаунт</p>


            <?php if (isset($error)): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> <?= $error ?>
                </div>
            <?php endif; ?>


            <form action="" method="POST" id="loginForm">

                <div class="form-group">
                    <label for="">Логин:</label>

                    <div class="input-group">
                        <i class="fa fa-user input-icon"></i>
                        <input type="text" name="login" required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="">Пароль:</label>

                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" required>
                    </div>
                </div>


                <input type="submit" value="Войти">
            </form>



            <div class="auth-footer">
                <p>Hет аккаунта ?
                    <a href="register.php">Зарегистрироваться</a>
                </p>
            </div>

        </div>
    </div>
</body>

</html>