<?php
session_start();
include __DIR__ . '/../classes/GuestBook.php';

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest book</title>
</head>
<body>

<?php
$path = __DIR__ . '/data.txt';
$guestBook = new GuestBook($path);

foreach ($guestBook->getData() as $lines) {?>
<div>
    <?php echo $lines; ?>
</div>

<?php } ?>


<form action="/guestbook/append.php" method="post">
    <textarea name="message"></textarea>
    <button type="submit">Отправить</button>
</form>


<p>
    <a href="/gallery/index.php">В галерею</a><br>
    <a href="/index.php">На главную</a>
</p>

</body>
</html>