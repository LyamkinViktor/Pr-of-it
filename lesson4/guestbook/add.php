<?php
include __DIR__ . '/functions.php';

if (isset($_POST['text'])) {
    $comment = trim($_POST['text']);

    $pathGuestBook = __DIR__ . '/db.txt';

    file_put_contents($pathGuestBook, $comment . "\n", FILE_APPEND);
}

header("Location: /lesson4/guestbook/book.php");
exit;