<?php
session_start();
require_once __DIR__ . '/functions.php';
require __DIR__ . '/classes/Uploader.php';

if (null == getCurrentUser()){
    exit('Вы не авторизованы!');
    } else {
    $uploading = new Uploader($_FILES['picture']);
    if ($uploading->upload() != false) {
        $log = getCurrentUser() . '-' . date("m.d.y") . '-' . $uploading->picture['name'];
        file_put_contents(__DIR__ . '/log.txt', $log . "\n", FILE_APPEND);
        header('Location: /lesson6/gallery/gallery.php');
    }
    echo 'не загружено';
}