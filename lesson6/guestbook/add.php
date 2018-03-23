<?php
require __DIR__ . '/classes/GuestBook.php';

if (isset($_POST['text'])) {
    $text = trim($_POST['text']);
    $guestBook = new GuestBook(__DIR__ . '/db.txt');

    $guestBook->append($text)->save();
}

header("Location: /lesson6/guestbook/book.php");
exit;