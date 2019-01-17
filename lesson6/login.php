<?php
session_start();
require_once __DIR__ . '/functions.php';

if (isset($_POST['exit'])) {
    session_unset();
}

//ЕСЛИ пользователь уже вошел (см. пункт 2), ТО редирект на главную страницу
if (null != getCurrentUser() ) {
    header('Location: http://php-1/book.php');
    exit;
}

//ЕСЛИ введены данные в форму входа - проверяем им checkPassword и ЕСЛИ проверка прошла,
// ТО запоминаем информацию о вошедшем пользователе
if (isset($_POST['login']) && isset($_POST['pwd'])) {
        $login = trim($_POST['login']);
        $pwd = trim($_POST['pwd']);
        if (true == checkPassword($login, $pwd)) {
            $_SESSION['login'] = $login;
            header('Location: http://php-1/book.php');
            exit;
        }
        $error = 'Неверная пара логин-пароль';
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<body>


<form action="/login.php" method="post">
    <label for="loginField">Введите ваш логин</label>
    <div><input type="text" name="login" id="loginField"></div><br>
    <label for="pwdField">Введите ваш пароль</label>
    <div><input type="password" name="pwd" id="pwdField"></div>
    <p><button type="submit">Вход</button></p>
</form>

<?php
echo $error;
?>

</body>
</html>