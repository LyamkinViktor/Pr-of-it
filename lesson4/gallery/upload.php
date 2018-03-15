<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>
    <?php


    if (isset($_FILES['picture'])) {
        if (0 == $_FILES['picture']['error']) {
            if('image/jpeg' == $_FILES['picture']['type'] || 'image/png' == $_FILES['picture']['type']) {

                move_uploaded_file(

                    $_FILES['picture']['tmp_name'],
                    __DIR__ . '/images/' . $_FILES['picture']['name']);
                echo 'Файл успешно загружен!';
            } else {
                echo 'Формат не поддерживается!';
            }

        }

    } ?>

<p>
    <a href="/lesson4/gallery/index.php">Перейти в галерею</a>
</p>
</body>
</html>


