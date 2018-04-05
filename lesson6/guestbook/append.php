<?php
require_once __DIR__ . '/classes/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/db.txt');

$guestBook->append($_POST['text'])->save();

header('Location: /lesson6/guestbook/book.php');