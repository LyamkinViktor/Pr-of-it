<?php session_start();
require_once __DIR__ . '/functions.php';
require __DIR__ . '/post.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>
<?php
$login = $_POST['login'];
var_dump($login);

$mimeTypes = ['image/jpeg', 'image/png'];

if (isset($_FILES['picture'])) {
    if (0 == $_FILES['picture']['error'] && null != getCurrentUser($login)) {
        if (true == in_array($_FILES['picture']['type'], $mimeTypes)) {
            move_uploaded_file($_FILES['picture']['tmp_name'],
                __DIR__ . '/images/' . $_FILES['picture']['name']);
            $log = getCurrentUser() . '-' . date("m.d.y") . '-' . $_FILES['picture']['name'];
            file_put_contents(__DIR__ . '/log.txt', $log . "\n", FILE_APPEND);
            echo 'Файл успешно загружен!';
        } else {
            echo 'Формат не поддерживается!';
        }
    } else {
        echo 'Вы не авторизованы';
    }
}?>

<p>
    <a href="/lesson5/gallery/gallery.php">Перейти в галерею</a>
</p>
</body>
</html>