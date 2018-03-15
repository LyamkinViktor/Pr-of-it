<?php session_start();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>

<?php

$id = $_GET['id'];

$pic = include __DIR__ . '/data.php';

?>

<div>
    <img src="/lesson5/gallery/images/<?php echo $pic[$id]; ?>">
</div>

<div>
    <a href="/lesson5/gallery/gallery.php">Перейти в галерею</a>
</div>

</body>
</html>