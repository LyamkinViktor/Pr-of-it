<?php session_start();
require_once __DIR__ . '/functions.php';
require __DIR__ . '/classes/Uploader.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>
<?php

$mimeTypes = ['image/jpeg', 'image/png'];

$login = $_SESSION['login'];

$picture = $_FILES['picture'];

if (null == getCurrentUser($login)){
    echo 'Вы не авторизованы';
    } else {
    if (0 == $_FILES['picture']['error']) {
        if (true == in_array($_FILES['picture']['type'], $mimeTypes)) {
            new Uploader($picture);
            $log = getCurrentUser($login) . '-' . date("m.d.y") . '-' . $_FILES['picture']['name'];
            file_put_contents(__DIR__ . '/log.txt', $log . "\n", FILE_APPEND);
            echo 'Файл успешно загружен!';
        } else {
            echo 'Формат не поддерживается!';
        }
    }
}
?>

<p>
    <a href="/lesson6/gallery/gallery.php">Перейти в галерею</a>
</p>
</body>
</html>