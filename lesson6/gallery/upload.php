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

if (null == getCurrentUser()){
    echo 'Вы не авторизованы'; // сразу проверяем существует ли сессия и такой пользователь в базе
    } else {

    $uploading = new Uploader($_FILES['picture']); // создаем новый объект загрузчик, передаем ему аргумент
    $uploading->isUploaded(); // проверяем был ли загружен файл от данного имени поля

    if (0 == $uploading->picture['error']) { // проеряем на наличие ошибок

        $mimeTypes = ['image/jpeg', 'image/png']; // задаём массив типов
        if (true == in_array($uploading->picture['type'], $mimeTypes)) { // сверяем на наличие переданный тип

            $uploading->upload(); // загружаем файл

            $log = getCurrentUser() . '-' . date("m.d.y") . '-' . $uploading->picture['name']; //создаём лог
            file_put_contents(__DIR__ . '/log.txt', $log . "\n", FILE_APPEND); // записываем лог в файл
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