<?php

if (isset($_POST['text'])) {
    $data = getData();
    $data[] = trim($_POST['text']);
    $res = implode(PHP_EOL, $data);
    $pathGuestBook = __DIR__ . '/db.txt';
    file_put_contents($pathGuestBook, $res);
}

header("Location: /lesson4/guestbook/book.php");
exit;