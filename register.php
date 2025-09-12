<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="auth-card">
            <h1>Регистрация</h1>
            <p>Создайте новый аккаунт</p>

            <form action="" method="POST" id="registrationForm">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <div class="input-group">
                        <i class="fa fa-user input-icon"></i>
                        <input type="text" name="login" id="login" placeholder="Придумайте логин" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="password" placeholder="Придумайте пароль" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="dateBirth">Дата рождения</label>
                    <div class="input-group">
                        <i class="fas fa-calendar-day input-icon"></i>
                        <input type="date" name="dateBirth" id="dateBirth" placeholder="Введите дату рождения" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">E-email</label>
                    <div class="input-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" id="email" placeholder="Введите e-mail" required>
                    </div>
                </div>

                <input type="submit" value="Зарегистрироваться">
            </form>


            <?php

            session_start();

            require_once "connectDB.php";

            if (isset($_POST['login']) and isset($_POST['password'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                $dateBirth = $_POST['dateBirth'];
                $email = $_POST['email'];

                // echo $dateBirth;


                $query = "INSERT INTO users SET
                    login='$login', password='$password', dateBirth = '$dateBirth', email='$email' ";
                mysqli_query($link, $query);


                $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
                $res = mysqli_query($link, $query);
                $user = mysqli_fetch_assoc($res);

                if (!empty($user)) {
                    header('Location: index.php');
                    $_SESSION['successAuth'] = "Авторизация прошла успешно!";
                    $_SESSION['auth'] = true;
                    $_SESSION['login'] = $login;
                    $_SESSION['id'] = mysqli_insert_id($link);

                    header("Location: index.php");
                }
            }


            ?>

            <div class="auth-footer">
                <p>Уже есть аккаунт ?
                    <a href="login.php">Войдите</a>
                </p>
            </div>

        </div>
    </div>

</body>

</html>