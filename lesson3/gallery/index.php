<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        img {
            width: 300px;
            height: 200px;
        }
    </style>
</head>
<body>


<?php

$pictures = include __DIR__ . '/data.php';

?>

<?php foreach ($pictures as $key => $pic) {?>
<div>
    <a href="/lesson3/gallery/image.php?id=<?php echo $key; ?>">
        <img src="/lesson3/gallery/images/<?php echo $pic; ?>">
    </a>
</div>
<?php } ?>


</body>
</html>