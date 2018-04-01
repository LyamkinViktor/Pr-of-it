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

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
}

if (null == getCurrentUser($login)){
    echo 'Вы не авторизованы';
    } else {

    $uploading = new Uploader($_FILES['picture']);
    $uploading->isUploaded();

    if (0 == $uploading->picture['error']) {

        $mimeTypes = ['image/jpeg', 'image/png'];
        if (true == in_array($uploading->picture['type'], $mimeTypes)) {

            $uploading->upload();

            $log = getCurrentUser($login) . '-' . date("m.d.y") . '-' . $uploading->picture['name'];
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