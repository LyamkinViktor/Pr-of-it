<?php session_start();
require_once __DIR__ . '/functions.php';
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

if (isset($_FILES['picture'])) {
    if (null == getCurrentUser($login)){
        echo 'Вы не авторизованы';
    } else {
        if (0 == $_FILES['picture']['error']) {
            if (true == in_array($_FILES['picture']['type'], $mimeTypes)) {
                move_uploaded_file($_FILES['picture']['tmp_name'],
                    __DIR__ . '/images/' . $_FILES['picture']['name']);
                $log = getCurrentUser($login) . '-' . date("m.d.y") . '-' . $_FILES['picture']['name'];
                file_put_contents(__DIR__ . '/log.txt', $log . "\n", FILE_APPEND);
                echo 'Файл успешно загружен!';
            } else {
                echo 'Формат не поддерживается!';
            }
        }
    }
}?>

<p>
    <a href="/lesson5/gallery/gallery.php">Перейти в галерею</a>
</p>
</body>
</html>