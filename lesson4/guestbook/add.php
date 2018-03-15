<?php

if (isset($_POST['text'])) {
    include __DIR__ . '/functions.php';

    $guestBookRows = getData();

    $comment = trim($_POST['text']);

    $guestBookRows[] = $comment;

    $data = implode('', $guestBookRows);

    $pathGuestBook = __DIR__ . '/db.txt';

    file_put_contents($pathGuestBook, $data ."\n", FILE_IGNORE_NEW_LINES);
}

header("Location: /lesson4/guestbook/book.php");