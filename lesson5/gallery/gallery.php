<?php session_start();
include __DIR__ . '/functions.php';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<style>
    img {
        width: 300px;
        height: 200px;
        margin: 5px;
    }
</style>
<body>

<?php

$pictures = include __DIR__ . '/data.php';

foreach ($pictures as $key => $pic) {
    if ($pic != '.' && $pic != '..') {?>
    <div>
        <a href="/lesson5/gallery/fullsize.php?id=<?php echo $key; ?>">
            <img src="/lesson5/gallery/images/<?php echo $pic; ?>">
        </a>
    </div>
<?php }
}?>

<?php

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
} else {
	$login = null;
}

if (null != getCurrentUser($login)) {
?>
<div>
    <form action="/lesson5/gallery/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button type="submit">Отправить</button>
    </form>
</div>
<?php } ?>

</body>
</html>