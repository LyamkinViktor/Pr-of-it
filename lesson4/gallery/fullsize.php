<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>

    <?php

    $id = $_GET['id'];

    $pic = include __DIR__ . '/data.php';

    ?>

    <div>
        <img src="/lesson4/gallery/images/<?php echo $pic[$id]; ?>">
    </div>

    <div>
        <a href="/lesson4/gallery/index.php">Перейти в галерею</a>
    </div>

</body>
</html>