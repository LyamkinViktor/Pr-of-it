<?php
session_start();
require_once __DIR__ . '/../classes/Uploader.php';

$upload = new Uploader('image');
$upload->upload();
header("Location: /gallery/index.php");

