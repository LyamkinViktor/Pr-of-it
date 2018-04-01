<?php require_once __DIR__ . '/classes/GuestBook.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>

<?php

$guestBook = new GuestBook(__DIR__ . '/db.txt');
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $guestBook->append($text)->save();
}

foreach ($guestBook->getData() as $string) {
    echo $string; ?> <br> <?php
}
?>

    <div>
        <form action="/lesson6/guestbook/book.php" method="post">
            <p><textarea name="text"></textarea></p>
            <p><button type="submit">Отправить</button></p>
        </form>
    </div>
</body>
</html>