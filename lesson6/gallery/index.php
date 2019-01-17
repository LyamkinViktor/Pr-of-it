<?php
session_start();
require_once __DIR__ . '/../functions.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<body>

<?php
$pictures = include __DIR__ . '/data.php';

foreach ($pictures as $key => $pic) {
    if ($pic != '.' && $pic != '..') { ?>
    <a href="/gallery/image.php?id=<?php echo $key; ?>">
        <img src="/gallery/img/<?php echo $pic; ?>" width="350" height="250">
    </a>
<?php }
} ?>

<?php
if (null != getCurrentUser() ) {?>
<form action="/gallery/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button type="submit">Загрузить</button>
</form>
<?php } ?>


<p>
    <a href="/index.php">На главную</a><br>
    <a href="/guestbook/book.php">Гостевая книга</a>
</p>

</body>
</html>