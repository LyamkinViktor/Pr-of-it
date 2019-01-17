<?php
require_once __DIR__ . '/../classes/GuestBook.php';

$path = __DIR__ . '/data.txt';
$guestBook = new GuestBook($path);
$text = $_POST['message'];
$guestBook->append($text)->save();

header('Location: http://php-1/guestbook/book.php');