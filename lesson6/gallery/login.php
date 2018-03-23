<?php session_start();
require_once __DIR__ . '/functions.php';

$login = null;
$password = null;

if (isset($_POST['login'], $_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
}

if (null != getCurrentUser($login)) {
    header('Location: /lesson6/gallery/gallery.php');
    exit;
}

if (true == checkPassword($login, $password)) {
    $_SESSION['login'] = $login;
    header('Location: /lesson6/gallery/gallery.php');
    exit;
}

if (null == getCurrentUser($login)) {?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>
    <body>
    <form action="/lesson6/gallery/login.php" method="post">
        <label for="login-field">Ваш логин</label>
        <input type="text" name="login" id="login-field">
        <br><br>
        <label for="password-field">Ваш пароль</label>
        <input type="password" name="password" id="password-field">
        <br><br>
        <input type="submit" value="Войти">
    </form>
    </body>
    </html>
<?php }?>
