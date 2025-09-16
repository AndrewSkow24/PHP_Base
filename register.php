<?php

session_start();
require_once "connectDB.php";
$error = "";

$countries = [
    'Россия',
    "Украина",
    "Беларусь",
    "Казахстан",
    "США",
    "Япония"
];

// проверка, что все поля заполнены
if (
    isset($_POST['login']) and
    isset($_POST['password']) and
    isset($_POST['confirm']) and
    isset($_POST['dateBirth']) and
    isset($_POST['email']) and
    isset($_POST['country'])
) {
    $login = trim($_POST['login']);
    $password = md5($_POST['password']);
    $confirm = md5($_POST['confirm']);
    $dateBirth = $_POST['dateBirth'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $resultRegistration = "";
    $errorLogin = "";
    $errorPassword = "";
    $errorDateBirth = "";
    $errorEmail  = "";
    $errorCountry = "";


    // проверка длины логина
    // ???
    if (strlen($login) < 4 or strlen($login) > 10) {
        $errorLogin = "Логин должен быть не короче 4 символов и не более 10";
    } elseif (!preg_match("/[A-Za-z0-9]/", $login)) {
        $errorLogin = "Логин должен содержать только латинские буквы и цифры";
        // длина пароля
    } elseif (strlen($_POST['password']) < 6 or strlen($_POST['password']) > 12) {
        $errorPassword = "Длина пароля должна составлять от 6 до 12 символов";
    } elseif ($password != $confirm) {
        $errorPassword = "Пароли не совпадают!";
    } else {
        // проверка на на отсутствие дублёра логина
        $userDouble = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE login='$login';"));

        if (!empty($userDouble)) {
            $errorLogin = "Пользователь с таким логином уже зарегистрирован";
        }
    }


    // если ошибок нет регистрируем пользователя
    if (empty($errorLogin) and empty($errorPassword)) {
        $resultRegistration = $query = "INSERT INTO users SET
                    login='$login', password='$password', dateBirth = '$dateBirth', email='$email', country='$country'; ";
        mysqli_query($link, $query);
    }



    if (!empty($resultRegistration)) {


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
}





?>



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


            <?php if (!empty($errorLogin)): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> <?= $errorLogin ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST" id="registrationForm">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <div class="input-group">
                        <i class="fa fa-user input-icon"></i>
                        <input type="text" name="login" id="login" placeholder="Придумайте логин" value="<?= $_POST['name'] ?? '' ?>" required>
                    </div>
                </div>

                <?php if (!empty($errorPassword)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?= $errorPassword ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="password" placeholder="Придумайте пароль" required>
                    </div>
                </div>

                <div class=" form-group">
                    <label for="password">Подтверждение пароля</label>
                    <div class="input-group">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="confirm" id="confirm" placeholder="Повторите пароль" required>
                    </div>
                </div>


                <?php if (!empty($errorDateBirth)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?= $errorDateBirth ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="dateBirth">Дата рождения</label>
                    <div class="input-group">
                        <i class="fas fa-calendar-day input-icon"></i>
                        <input type="date" name="dateBirth" id="dateBirth" placeholder="Введите дату рождения" value="<?= $_POST['dateBirth'] ?? '' ?>" required>
                    </div>
                </div>


                <?php if (!empty($errorEmail)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?= $errorEmail ?>
                    </div>
                <?php endif; ?>

                <div class=" form-group">
                    <label for="password">E-email</label>
                    <div class="input-group">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" id="email" placeholder="Введите e-mail" value="<?= $_POST['email'] ?? '' ?>" required>
                    </div>
                </div>


                <?php if (!empty($errorCountry)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i> <?= $errorCountry ?>
                    </div>
                <?php endif; ?>

                <div class=" form-group">
                    <label for="password">Страна проживания</label>
                    <div class="input-group">
                        <i class="fas fa-globe input-icon"></i>
                        <select name="country" id="country" required>
                            <option value="">-- Выберете страну --</option>
                            <?php foreach ($countries as $countryOption): ?>
                                <option value="<?= $countryOption ?>" <?= (isset($_POST['country']) && $_POST['country'] == $countryOption) ? 'selected' : '' ?>>
                                    <?= $countryOption ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <i class="fas fa-chevron-down select-arrow"></i>
                    </div>
                </div>

                <input type="submit" value="Зарегистрироваться">
            </form>



            <div class="auth-footer">
                <p>Уже есть аккаунт ?
                    <a href="login.php">Войдите</a>
                </p>
            </div>

        </div>
    </div>

</body>

</html>